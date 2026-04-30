<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;

class HomeController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();

        return view('welcome', [
            'aboutUs' => $aboutUs,
        ]);
    }
}
