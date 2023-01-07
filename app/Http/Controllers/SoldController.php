<?php

namespace App\Http\Controllers;

use App\Models\Sold;
use App\Http\Requests\StoreSoldRequest;
use App\Http\Requests\UpdateSoldRequest;

class SoldController extends Controller
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
     * @param  \App\Http\Requests\StoreSoldRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSoldRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sold  $sold
     * @return \Illuminate\Http\Response
     */
    public function show(Sold $sold)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sold  $sold
     * @return \Illuminate\Http\Response
     */
    public function edit(Sold $sold)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSoldRequest  $request
     * @param  \App\Models\Sold  $sold
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSoldRequest $request, Sold $sold)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sold  $sold
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sold $sold)
    {
        //
    }
}
