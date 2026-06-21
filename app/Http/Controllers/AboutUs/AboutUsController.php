<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $aboutUs = AboutUs::first();

        return view('about-us.index', [
            'subtitle' => 'About Us',
            'aboutUs' => $aboutUs,
        ]);
    }
}
