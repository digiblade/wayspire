<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomCollaborationsModal;
use App\Models\CustomFAQModal;
use App\Models\CustomHomeScreenModal;
use App\Models\CustomJourneyModal;
use App\Models\CustomOfferScreenModal;
use App\Models\CustomStepsModal;
use App\Models\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomAboutController extends Controller
{
    public function index()
    {
        $this->authorize('admin_settings_personalization');

        removeContentLocale();

        $sections = HomeSection::orderBy('order', 'asc')->get();
        $selectedSectionsName = $sections->pluck('name')->toArray();
        $steps = CustomStepsModal::first();
        $data = [
            'pageTitle' => trans('admin/main.about_us'),
            'sections' => $sections,
            'selectedSectionsName' => $selectedSectionsName,
            'name' => 'about_us',
            'steps' => $steps
        ];

        return view('admin.settings.personalization', $data);
    }
    public function update(Request $request, $id)
    {
        $step = CustomStepsModal::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',

            'section_1_title' => 'nullable|string',
            'section_1_description' => 'nullable|string',


            'section_2_title' => 'nullable|string',
            'section_2_description' => 'nullable|string',


            'section_3_title' => 'nullable|string',
            'section_3_description' => 'nullable|string',

            'banner_image' => 'nullable|string',
        ]);

        // Handle banner image upload


        $step->update($validated);

        return redirect()->route('steps.edit', $id)->with('success', 'Step updated successfully.');
    }
    public function store(Request $request)
    {
        $step = CustomStepsModal::findOrFail(1);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',

            'section_1_title' => 'nullable|string',
            'section_1_description' => 'nullable|string',


            'section_2_title' => 'nullable|string',
            'section_2_description' => 'nullable|string',


            'section_3_title' => 'nullable|string',
            'section_3_description' => 'nullable|string',

            'banner_image' => 'nullable|string',
        ]);

        // Handle banner image upload


        $step->update($validated);

        return redirect()->back();
    }

    // journey
    public function journey()
    {
        $this->authorize('admin_settings_personalization');

        removeContentLocale();

        $journey = CustomJourneyModal::first();
        $data = [
            'pageTitle' => trans('admin/main.journey'),
            'name' => 'journey',
            'journey' => $journey
        ];

        return view('admin.settings.personalization', $data);
    }
    public function journeyUpdate(Request $request, $id)
    {
        $step = CustomJourneyModal::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',

            'banner_image' => 'nullable|string',
            'timeline_image' => 'nullable|string',
        ]);

        // Handle banner image upload


        $step->update($validated);

        return redirect()->route('steps.edit', $id)->with('success', 'Step updated successfully.');
    }
    public function journeyStore(Request $request)
    {
        $step = CustomJourneyModal::findOrFail(1);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',

            'banner_image' => 'nullable|string',
            'timeline_image' => 'nullable|string',
        ]);

        $step->update($validated);

        return redirect()->back();
    }

    public function home_screen()
    {
        $this->authorize('admin_settings_personalization');

        removeContentLocale();

        $home_screen = CustomHomeScreenModal::first();
        $data = [
            'pageTitle' => trans('admin/main.home_screen'),
            'name' => 'home_screen',
            'home_screen' => $home_screen
        ];

        return view('admin.settings.personalization', $data);
    }
    public function home_screenUpdate(Request $request, $id)
    {
        $step = CustomHomeScreenModal::findOrFail($id);

        $validated = $request->validate([
            'top_nav' => 'required|string|max:255',
            'upscale_banner' => 'nullable|string',
            'what_we_done_desc' => 'required|string|max:255',
            'faq_banner' => 'nullable|string',
            'footer_description' => 'required|string|max:255',
        ]);

        // Handle banner image upload


        $step->update($validated);

        return redirect()->route('steps.edit', $id)->with('success', 'Step updated successfully.');
    }
    public function home_screenStore(Request $request)
    {
        $step = CustomHomeScreenModal::findOrFail(1);

        $validated = $request->validate([
            'top_nav' => 'required|string|max:255',
            'upscale_banner' => 'nullable|string',
            'what_we_done_desc' => 'required|string|max:255',
            'faq_banner' => 'nullable|string',
            'footer_description' => 'required|string|max:255',
        ]);

        $step->update($validated);

        return redirect()->back();
    }


    public function what_we_offer()
    {
        $this->authorize('admin_settings_personalization');

        removeContentLocale();

        $what_we_offer = CustomOfferScreenModal::first();
        $data = [
            'pageTitle' => trans('admin/main.what_we_offer'),
            'name' => 'what_we_offer',
            'what_we_offer' => $what_we_offer
        ];

        return view('admin.settings.personalization', $data);
    }
    public function what_we_offerUpdate(Request $request, $id)
    {
        $step = CustomOfferScreenModal::findOrFail($id);

        $validated = $request->validate([
            'card_1_title' => 'required|string|max:255',
            'card_1_description' => 'required|string',
            'card_1_icon' => 'required|string',

            'card_2_title' => 'required|string|max:255',
            'card_2_description' => 'required|string',
            'card_2_icon' => 'required|string',

            'card_3_title' => 'required|string|max:255',
            'card_3_description' => 'required|string',
            'card_3_icon' => 'required|string',

            'card_4_title' => 'required|string|max:255',
            'card_4_description' => 'required|string',
            'card_4_icon' => 'required|string',
        ]);

        // Handle banner image upload


        $step->update($validated);

        return redirect()->route('steps.edit', $id)->with('success', 'Step updated successfully.');
    }
    public function what_we_offerStore(Request $request)
    {


        $data = CustomOfferScreenModal::findOrFail(1);

        $validated = $request->validate([
            'card_1_title' => 'required|string|max:255',
            'card_1_description' => 'required|string',
            'card_1_icon' => 'required|string',

            'card_2_title' => 'required|string|max:255',
            'card_2_description' => 'required|string',
            'card_2_icon' => 'required|string',

            'card_3_title' => 'required|string|max:255',
            'card_3_description' => 'required|string',
            'card_3_icon' => 'required|string',

            'card_4_title' => 'required|string|max:255',
            'card_4_description' => 'required|string',
            'card_4_icon' => 'required|string',
        ]);

        $res =  $data->update($validated);
        // dd($res);
        return redirect()->back();
    }


    public function faq()
    {
        $faqs = CustomFAQModal::get();
        $data = [
            'pageTitle' => trans('admin/main.faq'),
            'name' => 'faq',
            'faqs' => $faqs
        ];

        return view('admin.settings.personalization', $data);
    }

    public function faqStore(Request $request)
    {
        $validated = $request->validate([
            'question' => 'nullable|string',
            'answer' => 'required|string|max:255',
        ]);

        CustomFAQModal::create($validated);
        return redirect()->back();
    }

    public function faqEdit($id)
    {
        $faq = CustomFAQModal::findOrFail($id);
        $data = [
            'pageTitle' => trans('admin/main.faq'),
            'name' => 'faq',
            'faq' => $faq
        ];
        return view('admin.settings.personalization', $data);
    }

    public function faqUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'nullable|string',
            'answer' => 'required|string|max:255',
        ]);

        $faq = CustomFAQModal::findOrFail($id);
        $faq->update($validated);

        return redirect("admin/settings/personalization/faq")->with('success', 'Collaboration updated successfully');
    }

    public function faqDestroy($id)
    {
        CustomFAQModal::findOrFail($id)->delete();
        return redirect()->back();
    }




    public function collaborations()
    {
        $collaborations = CustomCollaborationsModal::get();
        $data = [
            'pageTitle' => trans('admin/main.collaborations'),
            'name' => 'collaborations',
            'collaborations' => $collaborations
        ];

        return view('admin.settings.personalization', $data);
    }

    public function collaborationsStore(Request $request)
    {
        $validated = $request->validate([
            'logo_image' => 'nullable|string',
            'logo_name' => 'required|string|max:255',
            'row_index' => 'required|string|max:255',
        ]);

        CustomCollaborationsModal::create($validated);
        return redirect()->back();
    }

    public function collaborationsEdit($id)
    {
        $collaboration = CustomCollaborationsModal::findOrFail($id);
        $data = [
            'pageTitle' => trans('admin/main.collaborations'),
            'name' => 'collaborations_edit',
            'collaboration' => $collaboration
        ];
        return view('admin.settings.personalization', $data);
    }

    public function collaborationsUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'logo_image' => 'nullable|string',
            'logo_name' => 'required|string|max:255',
            'row_index' => 'required|string|max:255',
        ]);

        $collaboration = CustomCollaborationsModal::findOrFail($id);
        $collaboration->update($validated);

        return redirect("admin/settings/personalization/collaborations")->with('success', 'Collaboration updated successfully');
    }

    public function collaborationsDestroy($id)
    {
        CustomCollaborationsModal::findOrFail($id)->delete();
        return redirect()->back();
    }
}
