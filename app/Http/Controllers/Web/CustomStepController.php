<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CustomHomeScreenModal;
use App\Models\CustomJourneyModal;
use App\Models\CustomStepsModal;
use Illuminate\Http\Request;


use App\Models\Role;
use App\User;
use App\Models\Webinar;

class CustomStepController extends Controller
{
    public function index()
    {
        $steps = CustomStepsModal::first();
        $journey = CustomJourneyModal::first();

        // dd($steps['title']);
        $homeDefaultStatistics = $this->getHomeDefaultStatistics();
        $home_screen = CustomHomeScreenModal::first();

        $data = [
            'about' => $steps,
            "journey"=>$journey,
            'homeDefaultStatistics' => $homeDefaultStatistics,
            'home_screen'=>$home_screen

        ];
        return view(getTemplate() . '.home.about', $data);
    }

    public function show($id)
    {

        $step = CustomStepsModal::findOrFail($id);
        return view('steps.show', compact('step'));
    }

    public function edit($id)
    {
        $step = CustomStepsModal::findOrFail($id);
        return view('steps.edit', compact('step'));
    }

    public function update(Request $request, $id)
    {
        $step = CustomStepsModal::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',

            'section_1_title' => 'required|string|max:255',
            'section_1_description' => 'nullable|string',
            'section_1_icon' => 'nullable|string',
            'section_1_color' => 'nullable|string',

            'section_2_title' => 'required|string|max:255',
            'section_2_description' => 'nullable|string',
            'section_2_icon' => 'nullable|string',
            'section_2_color' => 'nullable|string',

            'section_3_title' => 'required|string|max:255',
            'section_3_description' => 'nullable|string',
            'section_3_icon' => 'nullable|string',
            'section_3_color' => 'nullable|string',

            'banner_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('banner_image')) {
            $path = $request->file('banner_image')->store('banners', 'public');
            $validated['banner_image'] = $path;
        }

        $step->update($validated);

        return redirect()->route('steps.edit', $step->id)->with('success', 'Step updated successfully!');
    }
    private function getHomeDefaultStatistics()
    {
        $skillfulTeachersCount = User::where('role_name', Role::$teacher)
            ->where(function ($query) {
                $query->where('ban', false)
                    ->orWhere(function ($query) {
                        $query->whereNotNull('ban_end_at')
                            ->where('ban_end_at', '<', time());
                    });
            })
            ->where('status', 'active')
            ->count();

        $studentsCount = User::where('role_name', Role::$user)
            ->where(function ($query) {
                $query->where('ban', false)
                    ->orWhere(function ($query) {
                        $query->whereNotNull('ban_end_at')
                            ->where('ban_end_at', '<', time());
                    });
            })
            ->where('status', 'active')
            ->count();

        $liveClassCount = Webinar::where('type', 'webinar')
            ->where('status', 'active')
            ->count();

        $offlineCourseCount = Webinar::where('status', 'active')
            ->whereIn('type', ['course', 'text_lesson'])
            ->count();

        return [
            'skillfulTeachersCount' => $skillfulTeachersCount,
            'studentsCount' => $studentsCount,
            'liveClassCount' => $liveClassCount,
            'offlineCourseCount' => $offlineCourseCount,
        ];
    }
}
