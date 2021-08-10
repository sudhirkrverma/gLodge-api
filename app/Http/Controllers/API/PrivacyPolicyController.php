<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $pp=PrivacyPolicy::all();
       if (count($pp)==0){
           return response()->json(['message'=>'Privacy Policy not found','success'=>false]);

       }
       return \response()->json(['pp'=>$pp,'success'=>true],200);
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
     * @param  \App\PrivacyPolicy  $privacyPolicy
     * @return \Illuminate\Http\Response
     */
    public function show(PrivacyPolicy $privacyPolicy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrivacyPolicy  $privacyPolicy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrivacyPolicy $privacyPolicy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrivacyPolicy  $privacyPolicy
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrivacyPolicy $privacyPolicy)
    {
        //
    }
}
