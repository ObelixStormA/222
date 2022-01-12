<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    public function kafedraTeacerIndex()
    {
        $fans_count = DB::table('fan_biriktirishes')->select('fan_id')->where('teacher_id', auth()->user()->id)->distinct()->get()->count();
        $guruh_count = DB::table('fan_biriktirishes')->select('guruh_id')->where('teacher_id', auth()->user()->id)->distinct()->get()->count();
        return view('teacher.layouts.teacher.statistika',compact('fans_count', 'guruh_count'));
    }
    public function home()
    {
        $fans_count = DB::table('fan_biriktirishes')->select('fan_id')->where('teacher_id', auth()->user()->id)->distinct()->get()->count();
        $guruh_count = DB::table('fan_biriktirishes')->select('guruh_id')->where('teacher_id', auth()->user()->id)->distinct()->get()->count();
        return view('teacher.home',compact('fans_count', 'guruh_count'));
    }
}
