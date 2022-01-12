<?php

namespace App\Http\Controllers\Kursant;

use App\Http\Controllers\Controller;
use App\Models\Davomat;
use App\Models\Fan;
use App\Models\Guruh;
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
        return view('kursant.layouts.davomat.indexdavomat', compact('fanlar', 'guruhlar'));
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
        return view('kursant.layouts.davomat.davomat', compact('ismlar', 'data', 'fanlar', 'guruhlar', 'oy', 'yil'));

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
