<?php

namespace App\Http\Controllers\Admin\yonalish;

use App\Http\Controllers\Controller;
use App\Models\Yonalish;
use Illuminate\Http\Request;

class YonalishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Yonalish::all();
        return view('admin.layouts.yonalish.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.yonalish.create');
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
        Yonalish::create([
            'nomi'=>$request->nomi,
        ]);
        return redirect(route('admin.yonalish.index'))->with('succes', 'yangi yo\'nalish qo\'shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Yonalish  $yonalish
     * @return \Illuminate\Http\Response
     */
    public function show(Yonalish $yonalish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Yonalish  $yonalish
     * @return \Illuminate\Http\Response
     */
    public function edit(Yonalish $yonalish)
    {
        return view('admin.layouts.yonalish.edit', compact('yonalish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Yonalish  $yonalish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yonalish $yonalish)
    {
        $request->validate([
            'nomi'=>'required'
        ]);
        $yonalish->update([
            'nomi'=>$request->nomi
        ]);
        return redirect(route('admin.yonalish.index'))->with('succes', 'yo\'nalish o\'zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Yonalish  $yonalish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yonalish $yonalish)
    {
        $yonalish->delete();
        return redirect(route('admin.yonalish.index'))->with('succes', 'yo\'nalish o\'chirildi');
    }
}
