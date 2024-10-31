<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function index()
    {
        // Fetch resume data from the database
        $resumes = DB::table('resumes')->get(); // Assuming your table is named 'resumes'
        return view('resume.index', compact('resumes')); // Pass data to the view
    }

    public function create()
    {
        // Return the view for creating a new resume
        return view('resume.create'); // Make sure you have this view created
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'education' => 'nullable|string',
            'experience' => 'nullable|string',
            'skills' => 'nullable|string',
        ]);

        // Insert the resume data into the database
        DB::table('resumes')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'education' => $request->education,
            'experience' => $request->experience,
            'skills' => $request->skills,
            'created_at' => now(), // Use current timestamp
            'updated_at' => now(),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('resume.index')->with('success', 'Resume created successfully!');
    }
}
