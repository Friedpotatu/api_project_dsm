<?php

namespace App\Http\Controllers;

use App\Models\AreaSkills;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAreaSkillsRequest;
use App\Http\Requests\UpdateAreaSkillsRequest;

class AreaSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areaSkills = AreaSkills::all();
        return response()->json(['areaSkills' => $areaSkills]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAreaSkillsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AreaSkills $areaSkills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAreaSkillsRequest $request, AreaSkills $areaSkills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AreaSkills $areaSkills)
    {
        //
    }
}
