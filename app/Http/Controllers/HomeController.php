<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Project;
use App\Models\Services;

class HomeController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();
        $services = Services::get()->take(4);
        $projects = Project::whereActive(true)->get()->take(6);

        return view('welcome', [
            'aboutUs' => $aboutUs,
            'services' => $services,
            'projects' => $projects,
        ]);
    }
}
