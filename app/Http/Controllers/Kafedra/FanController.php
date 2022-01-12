<?php

namespace App\Http\Controllers\Kafedra;

use App\Http\Controllers\Controller;
use App\Models\Fan;
use Illuminate\Http\Request;

class FanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Fan::all()->where('kafedra_id', auth()->user()->kafedra_id);
        return view('kafedraboshligi.layouts.fanlar.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kafedraboshligi.layouts.fanlar.create');
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
        Fan::create([
            'nomi'=>$request->nomi,
            'kafedra_id'=>auth()->user()->kafedra_id,
        ]);
        return redirect(route('kafedraboshligi.fanlar.index'))->with('succes', ' Fan qo\'shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function show(Fan $fan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getFan = Fan::all()->where('id', $id)->first();
        return view('kafedraboshligi.layouts.fanlar.edit', compact('getFan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $getFanByid = Fan::all()->where('id', $id)->first();
        $request->validate([
            'nomi'=>'required'
        ]);
        $getFanByid->update([
            'nomi'=>$request->nomi,
        ]);
        return redirect(route('kafedraboshligi.fanlar.index'))->with('succes', ' Fan o\'zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fan $fan)
    {
        $fan->delete();
        return redirect(route(' kafedraboshligi.fanlar.index'))->with('success', 'o\'chirildi');
    }
}
