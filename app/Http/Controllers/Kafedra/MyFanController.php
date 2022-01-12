<?php

namespace App\Http\Controllers\Kafedra;

use App\Http\Controllers\Controller;
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
        return view('kafedraboshligi.layouts.teacher.index', compact('data'));
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
     * @param  \App\Models\FanBiriktirish  $fanBiriktirish
     * @return \Illuminate\Http\Response
     */
    public function show(FanBiriktirish $fanBiriktirish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FanBiriktirish  $fanBiriktirish
     * @return \Illuminate\Http\Response
     */
    public function edit(FanBiriktirish $fanBiriktirish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FanBiriktirish  $fanBiriktirish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FanBiriktirish $fanBiriktirish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FanBiriktirish  $fanBiriktirish
     * @return \Illuminate\Http\Response
     */
    public function destroy(FanBiriktirish $fanBiriktirish)
    {
        //
    }
}
