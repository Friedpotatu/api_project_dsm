<?php

namespace App\Http\Controllers;

use App\Models\UserProgrammingLanguages;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserProgrammingLanguagesRequest;
use App\Http\Requests\UpdateUserProgrammingLanguagesRequest;

class UserProgrammingLanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userProgrammingLanguages = UserProgrammingLanguages::all();
        return response()->json(['userProgrammingLanguages' => $userProgrammingLanguages]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserProgrammingLanguagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserProgrammingLanguages $userProgrammingLanguages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserProgrammingLanguagesRequest $request, UserProgrammingLanguages $userProgrammingLanguages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProgrammingLanguages $userProgrammingLanguages)
    {
        //
    }
}
