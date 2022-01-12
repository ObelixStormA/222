<?php

namespace App\Http\Controllers\Admin\unvon;

use App\Http\Controllers\Controller;
use App\Models\Unvon;
use Illuminate\Http\Request;

class UnvonConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Unvon::all();
        return view('admin.layouts.unvon.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.unvon.create');
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
        Unvon::create([
            'nomi'=>$request->nomi,
        ]);
        return redirect(route('admin.unvon.index'))->with('succes', 'yangi unvon yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unvon  $unvon
     * @return \Illuminate\Http\Response
     */
    public function show(Unvon $unvon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unvon  $unvon
     * @return \Illuminate\Http\Response
     */
    public function edit(Unvon $unvon)
    {
        return view('admin.layouts.unvon.edit', compact('unvon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unvon  $unvon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unvon $unvon)
    {
        $request->validate([
            'nomi'=>'required'
        ]);
        $unvon->update([
            'nomi'=>$request->nomi
        ]);
        return redirect(route('admin.unvon.index'))->with('succes', 'unvon o\'zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unvon  $unvon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unvon $unvon)
    {
        $unvon->delete();
        return redirect(route('admin.unvon.index'))->with('succes', 'unvon o\'chirildi');
    }
}
