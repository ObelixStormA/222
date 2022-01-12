<?php

namespace App\Http\Controllers\Admin\Kurs;

use App\Http\Controllers\Controller;
use App\Models\Kur;
use Illuminate\Http\Request;

class KurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kur::all();
        return view('admin.layouts.kurs.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.kurs.create');
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
            'nomi'=>'required'
        ]);
        Kur::create([
            'nomi'=>$request->nomi
        ]);
        return redirect(route('admin.kurs.index'))->with('succes', 'yangi kurs yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kur  $kur
     * @return \Illuminate\Http\Response
     */
    public function show(Kur $kur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kur  $kur
     * @return \Illuminate\Http\Response
     */
    public function edit(Kur $kur)
    {

        return view('admin.layouts.kurs.edit', compact('kur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kur  $kur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kur $kur)
    {
        $request->validate([
            'nomi'=>'required'
        ]);
        $kur->update([
            'nomi'=>$request->nomi
        ]);
        return redirect(route('admin.kurs.index'))->with('succes', ' kurs o\'zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kur  $kur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kur $kur)
    {
        $kur->delete();
        return redirect(route('admin.kurs.index'))->with('succes', ' kurs o\'chirildi');
    }
}
