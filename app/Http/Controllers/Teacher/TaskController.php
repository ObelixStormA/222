<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Fan;
use App\Models\FanBiriktirish;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beforeindex()
    {
        $data = Task::with('getKursant', 'getGuruh', 'getTeach', 'getKaf', 'getFan', 'getYonalish')->where('deleted', 0)->Where('user_id', auth()->user()->id)->get();
        return view('teacher.layouts.task.index', compact('data'));
    }

    public function index()
    {
        $data = Task::with('getKursant', 'getGuruh', 'getTeach', 'getKaf', 'getFan', 'getYonalish')->where('deleted', 0)->Where('user_id', auth()->user()->id)->get();
        return view('teacher.layouts.task.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teach_id = auth()->user()->id;
        $fanlar = FanBiriktirish::with('getFan')->select('fan_id')->where('teacher_id', $teach_id)->distinct()->get();
        $guruhlar = FanBiriktirish::with('getGuruh')->select('guruh_id')->where('teacher_id', $teach_id)->distinct()->get();
        return view('teacher.layouts.task.create', compact('fanlar', 'guruhlar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_nomi'=>'required',
            'fan_id'=>'required',
            'guruh_id'=>'required',
            'ball'=>'required|numeric',
            'task'=>'required|mimes:docx,pdf,doc,pptx,ppt,xlsx,xls',
            'dead_line'=>'required',
        ]);
//        dd($request->file('task')->getClientOriginalName());
        $pathPass = $request->file('task')->store('tasks');

        Task::create([
            'nomi'=>$request->task_nomi,
            'kafedra_id'=>auth()->user()->kafedra_id,
            'user_id'=>auth()->user()->id,
            'fan_id'=>$request->fan_id,
            'guruh_id'=>$request->guruh_id,
            'max_ball'=>$request->ball,
            'dead_line'=>$request->dead_line,
            'description'=>$request->desc,
            'path'=>$pathPass,
        ]);
        return redirect(route('teacher.task.index'))->with('success', 'Yangi topshiriq yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($task)
    {

        $data = Task::with('getKursant', 'getGuruh', 'getTeach', 'getKaf', 'getFan', 'getYonalish')->Where('fan_id', $task)->Where('user_id', auth()->user()->id)->get();
        $fan = Fan::find($task);
        return view('teacher.layouts.task.taskindex', compact('data', 'fan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $teach_id = auth()->user()->id;
        $fanlar = FanBiriktirish::with('getFan')->select('fan_id')->where('teacher_id', $teach_id)->distinct()->get();
        $guruhlar = FanBiriktirish::with('getGuruh')->select('guruh_id')->where('teacher_id', $teach_id)->distinct()->get();
        return view('teacher.layouts.task.edit', compact('task', 'fanlar', 'guruhlar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_nomi'=>'required',
            'fan_id'=>'required',
            'guruh_id'=>'required',
            'ball'=>'required|numeric',
            'task'=>'required|mimes:docx,pdf,doc,pptx,ppt,xlsx,xls',
            'dead_line'=>'required',
        ]);
//        dd($request->file('task')->getClientOriginalName());
        $pathPass = $request->file('task')->store('tasks');
        $task->update([
            'nomi'=>$request->task_nomi,
            'kafedra_id'=>auth()->user()->kafedra_id,
            'user_id'=>auth()->user()->id,
            'fan_id'=>$request->fan_id,
            'guruh_id'=>$request->guruh_id,
            'max_ball'=>$request->ball,
            'dead_line'=>$request->dead_line,
            'description'=>$request->desc,
            'path'=>$pathPass,
        ]);
        return redirect(route('teacher.task.index'))->with('success', 'O\'zgertirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->update([
           'deleted'=>1,
        ]);
        return redirect(route('teacher.task.index'))->with('success', 'O\'chirildi');
    }
}
