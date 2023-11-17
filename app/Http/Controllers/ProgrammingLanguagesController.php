<?php

namespace App\Http\Controllers;

use App\Models\ProgrammingLanguages;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProgrammingLanguagesRequest;
use App\Http\Requests\UpdateProgrammingLanguagesRequest;

class ProgrammingLanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programmingLanguages = ProgrammingLanguages::all();
        return response()->json(['programmingLanguages' => $programmingLanguages]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgrammingLanguagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgrammingLanguages $programmingLanguages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgrammingLanguagesRequest $request, ProgrammingLanguages $programmingLanguages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgrammingLanguages $programmingLanguages)
    {
        //
    }
}
