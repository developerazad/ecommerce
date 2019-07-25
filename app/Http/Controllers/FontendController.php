<?php

namespace App\Http\Controllers;

use App\Fontend;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fontend');
        //return view('welcome');
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
     * @param  \App\Fontend  $fontend
     * @return \Illuminate\Http\Response
     */
    public function show(Fontend $fontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fontend  $fontend
     * @return \Illuminate\Http\Response
     */
    public function edit(Fontend $fontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fontend  $fontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fontend $fontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fontend  $fontend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fontend $fontend)
    {
        //
    }
}
