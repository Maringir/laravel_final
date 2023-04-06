<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tourist;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreTouristRequest;
use App\Http\Requests\UpdateTouristRequest;

class AdminTouristController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
       $models = Tourist::get();
        return view('admin.tourists.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $model = Tourist::get();
        return view('admin.tourists.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTouristRequest $request): RedirectResponse
    {
        Tourist::create($request->all());
        return to_route('admin.tourists.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tourist $tourist): Void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tourist $tourist): View
    {
        $model = $tourist;
        return view('admin.tourists.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTouristRequest $request, Tourist $tourist): RedirectResponse
    {
        $tourist->fill($request->all())->save();
        return to_route('admin.tourists.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tourist $tourist): string
    {
        $tourist->delete();
        return response()->json(['success'=>true]);
    }
}
