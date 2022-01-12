<?php

namespace App\Http\Controllers\Admin\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Guruh;
use App\Models\Kafedra;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kafedraboshliq = User::all()->where('role_id', 1)->count();
        $kursant = User::all()->where('role_id', 3)->count();
        $teacher = User::all()->where('role_id', 2)->count();
        $jami = $kafedraboshliq + $kursant + $teacher;
        $kafedra = Kafedra::all()->count();
        $guruh = Guruh::all()->count();
        return view('admin.dashboard', compact('kafedraboshliq', 'kafedra', 'kursant', 'teacher', 'jami', 'guruh'));
    }
}
