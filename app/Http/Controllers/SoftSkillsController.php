<?php

namespace App\Http\Controllers;

use App\Models\SoftSkills;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSoftSkillsRequest;
use App\Http\Requests\UpdateSoftSkillsRequest;

class SoftSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $softSkills = SoftSkills::all();
        return response()->json(['softSkills' => $softSkills]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSoftSkillsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SoftSkills $softSkills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSoftSkillsRequest $request, SoftSkills $softSkills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoftSkills $softSkills)
    {
        //
    }
}
