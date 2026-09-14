<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $classes = auth()->user()->classes()->latest()->get();
        $classes = SchoolClass::all();
        return Inertia::render('Classes/Index', [
            'classes' => $classes,
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
    public function show(ShcoolClass $shcoolClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShcoolClass $shcoolClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShcoolClass $shcoolClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShcoolClass $shcoolClass)
    {
        //
    }
}
