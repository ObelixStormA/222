<?php

namespace App\Http\Controllers\Admin\semestr;

use App\Http\Controllers\Controller;
use App\Models\Semestr;
use Illuminate\Http\Request;

class SemestrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Semestr::all();
        return view('admin.layouts.semestr.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.semestr.create');
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
        Semestr::create([
            'nomi'=>$request->nomi
        ]);
        return redirect(route('admin.semestr.index'))->with('succes', 'yangi semestr yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Semestr  $semestr
     * @return \Illuminate\Http\Response
     */
    public function show(Semestr $semestr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Semestr  $semestr
     * @return \Illuminate\Http\Response
     */
    public function edit(Semestr $semestr)
    {
        return view('admin.layouts.semestr.edit', compact('semestr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Semestr  $semestr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semestr $semestr)
    {
        $request->validate([
            'nomi'=>'required'
        ]);
        $semestr->update([
            'nomi'=>$request->nomi
        ]);
        return redirect(route('admin.semestr.index'))->with('succes', 'semestr o\'zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Semestr  $semestr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semestr $semestr)
    {
        $semestr->delete();
        return redirect(route('admin.kurs.index'))->with('succes', 'semestr o\'chirildi');
    }
}
