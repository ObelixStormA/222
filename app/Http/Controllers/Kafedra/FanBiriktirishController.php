<?php

namespace App\Http\Controllers\Kafedra;

use App\Http\Controllers\Controller;
use App\Models\Fan;
use App\Models\FanBiriktirish;
use App\Models\Guruh;
use App\Models\Semestr;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FanBiriktirishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FanBiriktirish::with('getFan', 'getTeacher', 'getSemestr', 'getGuruh')->where('kafedra_id', auth()->user()->kafedra_id)->get();
        return view('kafedraboshligi.layouts.fanbiriktirish.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fanlar = Fan::all()->where('kafedra_id', auth()->user()->kafedra_id);

        $teachers = DB::table('users')
            ->where('kafedra_id', auth()->user()->kafedra_id)
            ->where(function($query) {
                $query->where('role_id', 1)
                    ->orWhere('role_id', 2);
            })
            ->get();

        $semestrs = Semestr::all();
        $guruhs = Guruh::all();
        return view('kafedraboshligi.layouts.fanbiriktirish.create', compact('fanlar', 'teachers', 'semestrs', 'guruhs'));
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
            'fan_id'=>'required',
            'fan_soati'=>'required',
            'teach_id'=>'required',
            'semestr_id'=>'required',
            'guruh_id'=>'required'
        ]);
        $guruhs = $request->guruh_id;
        for($i=0; $i<count($guruhs); $i++)
        {
            FanBiriktirish::create([
                'fan_id'=>$request->fan_id,
                'fan_soati'=>$request->fan_soati,
                'teacher_id'=>$request->teach_id,
                'semestr'=>$request->semestr_id,
                'guruh_id'=>$guruhs[$i],
                'kafedra_id'=>auth()->user()->kafedra_id,
            ]);
        }
        return redirect(route('kafedraboshligi.fanbiriktirish.index'));



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
    public function edit($fanBiriktirish)
    {
        $fanlar = Fan::all()->where('kafedra_id', auth()->user()->kafedra_id);

        $teachers = DB::table('users')
            ->where('kafedra_id', auth()->user()->kafedra_id)
            ->where(function($query) {
                $query->where('role_id', 1)
                    ->orWhere('role_id', 2);
            })
            ->get();
        $semestrs = Semestr::all();
        $guruhs = Guruh::all();
        $data = FanBiriktirish::with('getFan', 'getTeacher', 'getSemestr', 'getGuruh')->find($fanBiriktirish);
        return view('kafedraboshligi.layouts.fanbiriktirish.edit', compact('data', 'fanlar', 'teachers', 'semestrs', 'guruhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FanBiriktirish  $fanBiriktirish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fanBiriktirish)
    {
//        dd($request->all());
        $request->validate([
            'fan_id'=>'required',
            'fan_soati'=>'required',
            'teach_id'=>'required',
            'semestr_id'=>'required',
            'guruh_id'=>'required'
        ]);
        $selected = FanBiriktirish::find($fanBiriktirish);
        $selected->update([
            'fan_id'=>$request->fan_id,
            'fan_soati'=>$request->fan_soati,
            'teacher_id'=>$request->teach_id,
            'semestr'=>$request->semestr_id,
            'guruh_id'=>$request->guruh_id,
            'kafedra_id'=>auth()->user()->kafedra_id,
        ]);
        return redirect(route('kafedraboshligi.fanbiriktirish.index'))->with('success', 'o\'zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FanBiriktirish  $fanBiriktirish
     * @return \Illuminate\Http\Response
     */
    public function destroy($fanid)
    {
        $forDestroy = FanBiriktirish::all()->where('id', $fanid)->first();
        $forDestroy->delete();
        return redirect(route('kafedraboshligi.fanbiriktirish.index'))->with('succes', 'o\'chirildi');
    }
}
