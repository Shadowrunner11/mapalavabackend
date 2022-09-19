<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHumanistRequest;
use App\Http\Requests\UpdateHumanistRequest;
use App\Models\Humanist;

class HumanistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHumanistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHumanistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Humanist  $humanist
     * @return \Illuminate\Http\Response
     */
    public function show(Humanist $humanist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Humanist  $humanist
     * @return \Illuminate\Http\Response
     */
    public function edit(Humanist $humanist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHumanistRequest  $request
     * @param  \App\Models\Humanist  $humanist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHumanistRequest $request, Humanist $humanist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Humanist  $humanist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Humanist $humanist)
    {
        //
    }

    public function getByDepartament(string $departament) {
      $humanists = Humanist::where('departamento', $departament)
        ->get();

      return  $humanists->toJson();
    }
}
