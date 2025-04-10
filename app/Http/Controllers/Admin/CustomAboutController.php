<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomHomeScreenModal;
use App\Models\CustomJourneyModal;
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
            'top_nav'=> 'required|string|max:255',
            'upscale_banner' => 'nullable|string',
            'what_we_done_desc'=> 'required|string|max:255',
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
            'top_nav'=> 'required|string|max:255',
            'upscale_banner' => 'nullable|string',
            'what_we_done_desc'=> 'required|string|max:255',
            'faq_banner' => 'nullable|string',
            'footer_description' => 'required|string|max:255',
        ]);

        $step->update($validated);

        return redirect()->back();
    }
}
