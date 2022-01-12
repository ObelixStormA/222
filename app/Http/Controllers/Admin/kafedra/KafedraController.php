<?php

namespace App\Http\Controllers\Admin\kafedra;

use App\Http\Controllers\Controller;
use App\Models\Kafedra;
use Illuminate\Http\Request;

class KafedraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kafedra::all();
        return view('admin.layouts.kafedra.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.kafedra.create');
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
        Kafedra::create([
            'nomi'=>$request->nomi
        ]);
        return redirect(route('admin.kafedra.index'))->with('succes', 'yangi kafedra yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kafedra  $kafedra
     * @return \Illuminate\Http\Response
     */
    public function show(Kafedra $kafedra)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kafedra  $kafedra
     * @return \Illuminate\Http\Response
     */
    public function edit(Kafedra $kafedra)
    {
        return view('admin.layouts.kafedra.edit', compact('kafedra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kafedra  $kafedra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kafedra $kafedra)
    {
        $request->validate([
            'nomi'=>'required'
        ]);
        $kafedra->update([
            'nomi'=>$request->nomi
        ]);
        return redirect(route('admin.kafedra.index'))->with('succes', 'kafedra o\'zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kafedra  $kafedra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kafedra $kafedra)
    {
        $kafedra->delete();
        return redirect(route('admin.kafedra.index'))->with('succes', 'kafedra o\'chirildi');
    }
}
