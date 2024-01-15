<?php

namespace App\Http\Controllers\Api;

use App\Models\Human;
use App\Http\Resources\HumanCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHumanRequest;
use App\Http\Resources\HumanResource;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateHumanRequest;

class HumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $humans=Human::all();
       // return HumanResource::collection($humans);

    return new HumanCollection(Human::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreHumanRequest $request)
    {
        $human=Human::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $humans=Human::create($request->all());
        return new HumanResource($humans);
        return response()->json($people, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Human $human)
    {
       return response()->json($human, 200);
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
        $human->update(["FirstName"=>$request["FirstName"]]);
        $human->update(["LastName"=>$request["LastName"]]);
        $human->update(["PhoneNuber"=>$request["PhoneNumber"]]);
        $human->update(["Street"=>$request["Street"]]);
        $human->update(["City"=>$request["City"]]);
        $human->update(["Country"=>$request["Country"]]);
        return response()->json(null, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Human $human)
    {
        $human->delete();
        return response(null, 200);
    }
}
