<?php

namespace App\Http\Controllers\Admin\daraja;

use App\Http\Controllers\Controller;
use App\Models\Daraja;
use Illuminate\Http\Request;

class DarajaConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Daraja::all();
        return view('admin.layouts.daraja.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.daraja.create');
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
        ]);
        Daraja::create([
            'nomi'=>$request->nomi,

        ]);
        return redirect(route('admin.daraja.index'))->with('succes', 'yangi daraja yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daraja  $daraja
     * @return \Illuminate\Http\Response
     */
    public function show(Daraja $daraja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daraja  $daraja
     * @return \Illuminate\Http\Response
     */
    public function edit(Daraja $daraja)
    {
        return view('admin.layouts.daraja.edit', compact('daraja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daraja  $daraja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daraja $daraja)
    {
        $request->validate([
            'nomi'=>'required'
        ]);
        $daraja->update([
            'nomi'=>$request->nomi
        ]);
        return redirect(route('admin.daraja.index'))->with('succes', 'daraja o\'zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daraja  $daraja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daraja $daraja)
    {
        $daraja->delete();
        return redirect(route('admin.daraja.index'))->with('succes', 'daraja o\'chirildi');
    }
}
