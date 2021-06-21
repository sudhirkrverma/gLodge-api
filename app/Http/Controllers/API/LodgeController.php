<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Lodge;
use Illuminate\Http\Request;

class LodgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lodge=Lodge::all();
        return response(['Lodges'=>$lodge,'message'=>'Data Retreived Successfully','total'=>count($lodge)],200);
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
     * @param  \App\Lodge  $lodge
     * @return \Illuminate\Http\Response
     */
    public function show(Lodge $lodge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lodge  $lodge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lodge $lodge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lodge  $lodge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lodge $lodge)
    {
        //
    }
}
