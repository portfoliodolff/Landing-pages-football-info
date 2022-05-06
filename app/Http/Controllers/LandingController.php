<?php

namespace App\Http\Controllers;

// use App\Models\landingcontroller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.landingpage.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\landingcontroller  $landingcontroller
     * @return \Illuminate\Http\Response
     */
    public function show(landingcontroller $landingcontroller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\landingcontroller  $landingcontroller
     * @return \Illuminate\Http\Response
     */
    public function edit(landingcontroller $landingcontroller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\landingcontroller  $landingcontroller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, landingcontroller $landingcontroller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\landingcontroller  $landingcontroller
     * @return \Illuminate\Http\Response
     */
    public function destroy(landingcontroller $landingcontroller)
    {
        //
    }

    public function clubs()
    {
        return view('pages.landingpage.clubs');
    }
    public function players()
    {
        return view('pages.landingpage.players');
    }
    public function managers()
    {
        return view('pages.landingpage.managers');
    }
    public function stadiums()
    {
        return view('pages.landingpage.stadiums');
    }
}
