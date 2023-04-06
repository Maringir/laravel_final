<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateTravelRequest;
use App\Models\Travel;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTravelRequest;
use App\Models\Tourist;
use App\Models\Extra;
use App\Models\Destination;
use App\Models\Language;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;



class AdminTravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travels = Travel::get();
        dd($travels);
        //return view('admin.travels.index', compact('travels'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $destinations = Destination::get();
        $languages = Language::get();
        $extras = Extra::get();
        $tourists = Tourist::get();

        return view('admin.travels.create',  compact('destinations','languages','extras','tourists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTravelRequest $request): RedirectResponse
    {
        Travel::customCreate($request);
        return to_route('admin.travels.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel): View
    {
        $destinations = Destination::get();
        $languages = Language::get();
        $extras = Extra::get();
        $tourists = Tourist::get();

        return view('admin.travels.edit', compact('destinations','languages','extras','tourists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTravelRequest $request, Travel $travel): RedirectResponse
    {
        $travel->customUpdate($request);
        return to_route('admin.travels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel): string
    {
        $travel->delete();
        return response()->json(['success'=>true]);
    }
}
