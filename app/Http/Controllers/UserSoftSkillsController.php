<?php

namespace App\Http\Controllers;

use App\Models\UserSoftSkills;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserSoftSkillsRequest;
use App\Http\Requests\UpdateUserSoftSkillsRequest;

class UserSoftSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userSoftSkills = UserSoftSkills::all();
        return response()->json(['userSoftSkills' => $userSoftSkills]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserSoftSkillsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserSoftSkills $userSoftSkills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserSoftSkillsRequest $request, UserSoftSkills $userSoftSkills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserSoftSkills $userSoftSkills)
    {
        //
    }
}
