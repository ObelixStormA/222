<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Davomat;
use App\Models\Fan;
use App\Models\FanBiriktirish;
use App\Models\Guruh;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DavomatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fanlar = Fan::all();
        $guruhlar = Guruh::all();
        return view('teacher.layouts.davomat.indexdavomat', compact('fanlar', 'guruhlar'));
    }

    public function fordavomat($fan_id, $guruh_id)
    {
        $guruh = Guruh::find($guruh_id);
        $fan = Fan::find($fan_id);
        $teacher_id = auth()->user()->id;
        $kursant = User::all()->where('guruh_id', $guruh_id);

        return view('teacher.layouts.davomat.change', compact('kursant', 'guruh', 'fan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = FanBiriktirish::with('getFan', 'getGuruh')->where('teacher_id', auth()->user()->id)->get();
        return view('teacher.layouts.davomat.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fanlar = Fan::all();
        $guruhlar = Guruh::all();
        $teacher_id = auth()->user()->id;
        $kafedra_id = auth()->user()->kafedra_id;
        $names = $request->name;
        $ides = $request->name_id;
        for($j = 0; $j<count($names); $j++)
        {
            Davomat::create(
                [
                    'kursant_id'=>$ides[$j],
                    'guruh_id'=>$request->guruh_id,
                    'fan_id'=>$request->fan_id,
                    'teach_id'=>$teacher_id,
                    'kaf_id'=>$kafedra_id,
                    'davomat'=>$names[$j]

                ]
            );
        }
        return redirect()->route( 'teacher.davomat.index' )->with( [ 'success' => 'yo\'qlama qilindi']);
    }
    public function getDavomat(Request $request)
    {
        $fanlar = Fan::all();
        $guruhlar = Guruh::all();
        $fan_id = $request->fan_id;
        $guruh_id = $request->guruh_id;
        $oy = $request->oy;
        $yil = $request->yil;
        $teach_id = auth()->user()->id;
//        ->whereMonth('created_at', $oy)->whereYear('created_at', $yil)
        $ismlar = DB::table('davomats')->select('kursant_id')->where('guruh_id', $guruh_id)->where('fan_id', $fan_id)->distinct()->get();


//        $data = Davomat::all()->where('guruh_id', $guruh_id)->where('fan_id', $fan_id)->where('teach_id', $teach_id)->where('created_at', $oy)->where('created_at', $oy)->groupBy('kursant_id');

        $data = Davomat::with('getKursant', 'getGuruh', 'getKaf', 'getTeach', 'getFan')->where('guruh_id', $guruh_id)->whereMonth('created_at', $oy)->whereYear('created_at', $yil)->where('fan_id', $fan_id)->get();
        return view('teacher.layouts.davomat.davomat', compact('ismlar', 'data', 'fanlar', 'guruhlar', 'oy', 'yil'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Davomat  $davomat
     * @return \Illuminate\Http\Response
     */
    public function show(Davomat $davomat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Davomat  $davomat
     * @return \Illuminate\Http\Response
     */
    public function edit(Davomat $davomat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Davomat  $davomat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Davomat $davomat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Davomat  $davomat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Davomat $davomat)
    {
        //
    }
}
