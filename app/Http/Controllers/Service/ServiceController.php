<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::get();

        return view('services.index', [
            'services' => $services,
            'subtitle' => 'Services',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $service)
    {
        return view('services.show', [
            'service' => $service,
            'subtitle' => 'Services Details',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $service)
    {
        //
    }
}
