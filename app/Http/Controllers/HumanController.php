<?php

namespace App\Http\Controllers;

use App\Models\Human;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHumanRequest;
use App\Http\Requests\UpdateHumanRequest;

class HumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreHumanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Human $human)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Human $human)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHumanRequest $request, Human $human)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Human $human)
    {
        //
    }
}
