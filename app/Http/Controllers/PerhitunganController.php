<?php

namespace App\Http\Controllers;

use App\Models\Perhitungan;
use App\Http\Requests\StorePerhitunganRequest;
use App\Http\Requests\UpdatePerhitunganRequest;

class PerhitunganController extends Controller
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
     * @param  \App\Http\Requests\StorePerhitunganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerhitunganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perhitungan  $perhitungan
     * @return \Illuminate\Http\Response
     */
    public function show(Perhitungan $perhitungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perhitungan  $perhitungan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perhitungan $perhitungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerhitunganRequest  $request
     * @param  \App\Models\Perhitungan  $perhitungan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerhitunganRequest $request, Perhitungan $perhitungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perhitungan  $perhitungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perhitungan $perhitungan)
    {
        //
    }
}
