<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Member;
use App\Models\Project;
use App\Models\Services;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $aboutUs = AboutUs::first();
        $services = Services::get()->take(4);
        $projects = Project::whereActive(true)->get()->take(6);
        $members = Member::whereActive(true)->get()->take(6);

        return view('welcome', [
            'aboutUs' => $aboutUs,
            'services' => $services,
            'projects' => $projects,
            'members' => $members,
        ]);
    }
}
