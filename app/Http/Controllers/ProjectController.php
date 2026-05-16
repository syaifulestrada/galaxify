<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::whereActive(true)->get();

        return view('projects.index', [
            'subtitle' => 'Projects',
            'projects' => $projects,
        ]);
    }

    public function show(string $slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('projects.show', [
            'subtitle' => 'Projects Details',
            'project' => $project,
        ]);
    }
}
