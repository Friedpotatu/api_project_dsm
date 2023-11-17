<?php

namespace App\Http\Controllers;

use App\Models\UserAreaSkills;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserAreaSkillsRequest;
use App\Http\Requests\UpdateUserAreaSkillsRequest;

class UserAreaSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userAreaSkills = UserAreaSkills::all();
        return response()->json(['userAreaSkills' => $userAreaSkills]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserAreaSkillsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserAreaSkills $userAreaSkills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserAreaSkillsRequest $request, UserAreaSkills $userAreaSkills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAreaSkills $userAreaSkills)
    {
        //
    }
}
