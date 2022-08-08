<?php

namespace App\Http\Controllers;

use App\Models\Confirm;
use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.confirm.list', [
            'title' => 'List Confirm',
        ]);
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
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function show(Confirm $confirm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function edit(Confirm $confirm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confirm $confirm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confirm $confirm)
    {
        //
    }
}
