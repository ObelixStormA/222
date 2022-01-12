<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Fan;
use App\Models\Mark;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class MakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Task::with('getKursant', 'getGuruh', 'getTeach', 'getKaf', 'getFan', 'getYonalish')->Where('user_id', auth()->user()->id)->get();
        return view('teacher.layouts.mark.index', compact('data'));
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
        $mark = Mark::where('kursant_id', $request->kursant_id)->where('teach_id', $request->teacher_id)->where('fan_id', $request->fan_id)->exists();
        if(!$mark){
            Mark::create([
                'kursant_id'=>$request->kursant_id,
                'guruh_id'=>$request->guruh_id,
                'fan_id'=>$request->fan_id,
                'teach_id'=>$request->teacher_id,
                'task_id'=>$request->task_id,
                'mark'=>$request->ball,
            ]);
        }else {
            $mark_id = Mark::where('kursant_id', $request->kursant_id)->where('teach_id', $request->teacher_id)->where('fan_id', $request->fan_id)->first();

            $mark_id->update([
                'kursant_id'=>$request->kursant_id,
                'guruh_id'=>$request->guruh_id,
                'fan_id'=>$request->fan_id,
                'teach_id'=>$request->teacher_id,
                'task_id'=>$request->task_id,
                'mark'=>$request->ball,
            ]);
        }
        return redirect()->route('teacher.markgroup',  ['task_id'=> $request->task_id, 'fan_id'=>$request->fan_id, 'group_id'=>$request->guruh_id, 'teach_id'=>$request->teacher_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function showGroupMark($task_id, $fan_id, $group_id, $teach_id){
        $kursant = User::all()->where('guruh_id', $group_id);
        $data = Mark::with('getKursant')->Where('guruh_id', $group_id)->Where('task_id', $task_id)->Where('fan_id', $fan_id)->get();
        $task = Task::find($task_id);
        $fan = Fan::find($fan_id);
        return view('teacher.layouts.mark.markgroup', compact('data', 'kursant', 'fan_id', 'teach_id', 'group_id', 'task', 'fan'));
    }



    public function marking($task_id, $fan_id,$guruh_id, $teach_id){
        $kursantlar = User::with('getGuruh')->Where('guruh_id', $guruh_id)->get();
        $fan = Fan::where('id', $fan_id)->first();
        $teacher = User::Where('id', $teach_id)->first();
        $task = Task::find($task_id);
        return view('teacher.layouts.mark.baholash',compact('kursantlar', 'fan', 'teacher', 'guruh_id', 'task'));
    }

    public function show(Mark $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function edit(Mark $mark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mark $mark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
