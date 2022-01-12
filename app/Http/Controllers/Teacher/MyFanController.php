<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Fan;
use App\Models\FanBiriktirish;
use Illuminate\Http\Request;

class MyFanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_id = auth()->user()->id;
        $data = FanBiriktirish::all()->where('teacher_id', $my_id);
        return view('teacher.layouts.teacher.index', compact('data'));
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
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function show(Fan $fan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function edit(Fan $fan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fan $fan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fan $fan)
    {
        //
    }
}
