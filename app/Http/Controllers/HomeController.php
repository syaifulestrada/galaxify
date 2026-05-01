<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Services;

class HomeController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();
        $services = Services::get()->take(4);

        return view('welcome', [
            'aboutUs' => $aboutUs,
            'services' => $services,
        ]);
    }
}
