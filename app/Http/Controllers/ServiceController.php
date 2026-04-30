<?php

namespace App\Http\Controllers;

use App\Models\Services;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Services::get();

        return view('services.index', [
            'services' => $services,
            'subtitle' => 'Services',
        ]);
    }

    public function show(string $slug)
    {
        $services = Services::where('slug', $slug)->firstOrFail();

        return view('services.show', [
            'services' => $services,
            'subtitle' => 'Services Details',
        ]);
    }
}
