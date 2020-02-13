<?php

namespace App\Http\Controllers;

use App\Mdatapendidik;
use Illuminate\Http\Request;

class DatapendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/page/datapendidik');
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
     * @param  \App\Mdatapendidik  $mdatapendidik
     * @return \Illuminate\Http\Response
     */
    public function show(Mdatapendidik $mdatapendidik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mdatapendidik  $mdatapendidik
     * @return \Illuminate\Http\Response
     */
    public function edit(Mdatapendidik $mdatapendidik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mdatapendidik  $mdatapendidik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mdatapendidik $mdatapendidik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mdatapendidik  $mdatapendidik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mdatapendidik $mdatapendidik)
    {
        //
    }
}
