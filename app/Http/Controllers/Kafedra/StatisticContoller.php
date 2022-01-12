<?php

namespace App\Http\Controllers\Kafedra;

use App\Http\Controllers\Controller;
use App\Models\FanBiriktirish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticContoller extends Controller
{
    public function kaderaIndex()
    {

    }
    public function kafedraTeacerIndex()
    {
        $fans_count = DB::table('fan_biriktirishes')->select('fan_id')->where('teacher_id', auth()->user()->id)->distinct()->get()->count();
        $guruh_count = DB::table('fan_biriktirishes')->select('guruh_id')->where('teacher_id', auth()->user()->id)->distinct()->get()->count();
        return view('kafedraboshligi.layouts.teacher.statistika',compact('fans_count', 'guruh_count'));
    }
    public function home()
    {
        $fans_count = DB::table('fan_biriktirishes')->select('fan_id')->where('teacher_id', auth()->user()->id)->distinct()->get()->count();
        $guruh_count = DB::table('fan_biriktirishes')->select('guruh_id')->where('teacher_id', auth()->user()->id)->distinct()->get()->count();
        return view('kafedraboshligi.home',compact('fans_count', 'guruh_count'));
    }


}
