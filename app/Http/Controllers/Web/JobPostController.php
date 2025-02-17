<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Bundle;
use App\Models\Category;
use App\Models\FeatureWebinar;
use App\Models\JobApplication;
use App\Models\JobPost;
use App\Models\SpecialOffer;
use App\Models\Ticket;
use App\Models\Webinar;
use App\Models\WebinarFilterOption;
use App\Models\WebinarReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobPostController extends Controller
{
    public $tableName = 'job_posts';
    public $columnId = 'webinar_id';


    public function index(Request $request)
    {
        $job_post_query = JobPost::select('job_posts.*', 'users.full_name as company_name')
            ->join('users', 'users.id', '=', 'job_posts.company_id')
            ->where('users.role_name', 'company')
            ->where('job_posts.status', 'active')
            ->where('job_posts.company_id', auth()->id())
            ->orderBy('job_posts.created_at', 'desc')
            ->get();
        $sort = $request->get('sort', null);
        $pageTitle = "Jobs";
        $pageDescription = "Current job postings";
        $data = [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'jobs' => $job_post_query

        ];
        return view(getTemplate() . '.pages.job_post', $data);
    }

    public function description(Request $request, $id)
    {
        $job_post_query = JobPost::select('job_posts.*', 'users.full_name as company_name')
            ->join('users', 'users.id', '=', 'job_posts.company_id')
            ->where('users.role_name', 'company')
            ->where('job_posts.status', 'active')->where('job_posts.id', $id)->orderBy('job_posts.created_at', 'desc')
            ->get()->first();
        $sort = $request->get('sort', null);
        $pageTitle = "Jobs";
        $pageDescription = "Current job postings";
        $data = [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'job' => $job_post_query

        ];
        return view(getTemplate() . '.pages.job_post_description', $data);
    }
    public function store(Request $request, $id)
    {
        $request->validate([
            'job_post_id' => 'required|exists:job_posts,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|string|max:15',
            'resume' => 'required|mimes:pdf|max:2048',
        ]);

        // Store file
        $resumePath = $request->file('resume')->store('resumes', 'public');

        JobApplication::create([
            'job_post_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'resume' => $resumePath,
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
    public function handleFilters($request, $query)
    {
        $upcoming = $request->get('upcoming', null);
        $isFree = $request->get('free', null);
        $withDiscount = $request->get('discount', null);
        $isDownloadable = $request->get('downloadable', null);
        $sort = $request->get('sort', null);
        $filterOptions = $request->get('filter_option', []);
        $typeOptions = $request->get('type', []);
        $moreOptions = $request->get('moreOptions', []);

        $query->whereHas('teacher', function ($query) {
            $query->where('status', 'active')
                ->where(function ($query) {
                    $query->where('ban', false)
                        ->orWhere(function ($query) {
                            $query->whereNotNull('ban_end_at')
                                ->where('ban_end_at', '<', time());
                        });
                });
        });

        if ($this->tableName == 'webinars') {

            if (!empty($upcoming) and $upcoming == 'on') {
                $query->whereNotNull('start_date')
                    ->where('start_date', '>=', time());
            }

            if (!empty($isDownloadable) and $isDownloadable == 'on') {
                $query->where('downloadable', 1);
            }

            if (!empty($typeOptions) and is_array($typeOptions)) {
                $query->whereIn("{$this->tableName}.type", $typeOptions);
            }

            if (!empty($moreOptions) and is_array($moreOptions)) {
                if (in_array('subscribe', $moreOptions)) {
                    $query->where('subscribe', 1);
                }

                if (in_array('certificate_included', $moreOptions)) {
                    $query->whereHas('quizzes', function ($query) {
                        $query->where('certificate', 1)
                            ->where('status', 'active');
                    });
                }

                if (in_array('with_quiz', $moreOptions)) {
                    $query->whereHas('quizzes', function ($query) {
                        $query->where('status', 'active');
                    });
                }

                if (in_array('featured', $moreOptions)) {
                    $query->whereHas('feature', function ($query) {
                        $query->whereIn('page', ['home_categories', 'categories'])
                            ->where('status', 'publish');
                    });
                }
            }
        }

        if (!empty($isFree) and $isFree == 'on') {
            $query->where(function ($qu) {
                $qu->whereNull('price')
                    ->orWhere('price', '0');
            });
        }

        if (!empty($withDiscount) and $withDiscount == 'on') {
            $now = time();
            $webinarIdsHasDiscount = [];

            $tickets = Ticket::where('start_date', '<', $now)
                ->where('end_date', '>', $now)
                ->whereNotNull("{$this->columnId}")
                ->get();

            foreach ($tickets as $ticket) {
                if ($ticket->isValid()) {
                    $webinarIdsHasDiscount[] = $ticket->{$this->columnId};
                }
            }

            $specialOffersItemIds = SpecialOffer::where('status', 'active')
                ->where('from_date', '<', $now)
                ->where('to_date', '>', $now)
                ->pluck("{$this->columnId}")
                ->toArray();

            $webinarIdsHasDiscount = array_merge($specialOffersItemIds, $webinarIdsHasDiscount);

            $webinarIdsHasDiscount = array_unique($webinarIdsHasDiscount);

            $query->whereIn("{$this->tableName}.id", $webinarIdsHasDiscount);
        }

        if (!empty($sort)) {
            if ($sort == 'expensive') {
                $query->whereNotNull('price');
                $query->where('price', '>', 0);
                $query->orderBy('price', 'desc');
            }

            if ($sort == 'inexpensive') {
                $query->whereNotNull('price');
                $query->where('price', '>', 0);
                $query->orderBy('price', 'asc');
            }

            if ($sort == 'bestsellers') {
                $query->leftJoin('sales', function ($join) {
                    $join->on("{$this->tableName}.id", '=', "sales.{$this->columnId}")
                        ->whereNull('refund_at');
                })
                    ->whereNotNull("sales.{$this->columnId}")
                    ->select("{$this->tableName}.*", "sales.{$this->columnId}", DB::raw("count(sales.{$this->columnId}) as salesCounts"))
                    ->groupBy("sales.{$this->columnId}")
                    ->orderBy('salesCounts', 'desc');
            }

            if ($sort == 'best_rates') {
                $query->leftJoin('webinar_reviews', function ($join) {
                    $join->on("{$this->tableName}.id", '=', "webinar_reviews.{$this->columnId}");
                    $join->where('webinar_reviews.status', 'active');
                })
                    ->whereNotNull('rates')
                    ->select("{$this->tableName}.*", DB::raw('avg(rates) as rates'))
                    ->groupBy("{$this->tableName}.id")
                    ->orderBy('rates', 'desc');
            }
        }

        if (!empty($filterOptions) and is_array($filterOptions)) {
            $webinarIdsFilterOptions = WebinarFilterOption::whereIn('filter_option_id', $filterOptions)
                ->pluck($this->columnId)
                ->toArray();

            $query->whereIn("{$this->tableName}.id", $webinarIdsFilterOptions);
        }

        return $query;
    }
}
