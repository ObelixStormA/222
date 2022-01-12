<?php

namespace App\Http\Controllers\Admin\Guruh;

use App\Http\Controllers\Controller;
use App\Models\Guruh;
use App\Models\Kur;
use Illuminate\Http\Request;

class GuruhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guruh::all();
        return view('admin.layouts.guruh.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kurs = Kur::all();
        return view('admin.layouts.guruh.create', compact('kurs'));
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
            'nomi'=>'required',
            'kurs_id'=>'required'
        ]);
        Guruh::create([
            'nomi'=>$request->nomi,
            'kurs_id'=>$request->kurs_id
        ]);
        return redirect(route('admin.guruh.index'))->with('succes', 'yangi guruh yaratildi');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guruh  $guruh
     * @return \Illuminate\Http\Response
     */
    public function show(Guruh $guruh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guruh  $guruh
     * @return \Illuminate\Http\Response
     */
    public function edit(Guruh $guruh)
    {
        $kurs = Kur::all();
        return view('admin.layouts.guruh.edit', compact('guruh', 'kurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guruh  $guruh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guruh $guruh)
    {
        $request->validate([
            'nomi'=>'required',
            'kurs_id'=>'required'
        ]);
        $guruh->update([
            'nomi' => $request->nomi,
            'kurs_id'=>$request->kurs_id
        ]);

        return redirect(route('admin.guruh.index'))->with('succes', 'guruh o\'zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guruh  $guruh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guruh $guruh)
    {
        $guruh->delete();
        return redirect(route('admin.guruh.index'))->with('succes', 'guruh o\'chirildi');
    }
}
