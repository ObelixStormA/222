<?php

namespace App\Http\Controllers\Kursant;

use App\Http\Controllers\Controller;
use App\Models\Fan;
use App\Models\Mark;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showGroupMark($task_id, $fan_id, $group_id, $teach_id){
        $kursant = User::all()->where('guruh_id', $group_id);
        $data = Mark::with('getKursant')->Where('guruh_id', $group_id)->Where('task_id', $task_id)->Where('fan_id', $fan_id)->get();
        $task = Task::find($task_id);
        $fan = Fan::find($fan_id);
        return view('kursant.layouts.mark.markgroup', compact('data', 'kursant', 'fan_id', 'teach_id', 'group_id', 'task', 'fan'));
    }
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
