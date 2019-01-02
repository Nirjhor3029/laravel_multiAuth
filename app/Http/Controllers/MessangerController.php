<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessangerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //here we can verify the webhook

        $this->verifyAccess();
    }

    public function verifyAccess(){
        echo "hello";

        $local_token = env('FACEBOOK_MESSENGER_WEBHOOK_TOKEN'); //token saved in local

        $hub_verify_token = request('hub_verify_token'); //token collected from live



        //condition if our local token is equal to hub_verify_token
        if($hub_verify_token == $local_token){

            //echo the hub_challenge in able  to verify

            echo request('hub_challenge');

            exit;
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
