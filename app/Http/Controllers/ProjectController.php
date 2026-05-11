<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();

        return view('projects.index', [
            'subtitle' => 'Projects',
            'projects' => $projects,
        ]);
    }

    public function show(string $slug)
    {
        $projects = Project::where('slug', $slug)->firstOrFail();

        return view('projects.show', [
            'subtitle' => 'Projects Details',
            'projects' => $projects,
        ]);
    }
}
