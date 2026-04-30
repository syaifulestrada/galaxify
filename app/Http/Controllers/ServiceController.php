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
}
