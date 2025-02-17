<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function store(Request $request)
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
            'job_post_id' => $request->job_post_id,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'resume' => $resumePath,
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
