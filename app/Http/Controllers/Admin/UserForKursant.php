<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guruh;
use App\Models\Kafedra;
use App\Models\Kur;
use App\Models\User;
use App\Models\Yonalish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserForKursant extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::with('getKaf')->where('role_id', 3)->get();
        return view('admin.login.kursant.index', compact('data' ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kurs = Kur::all();
        $guruhs = Guruh::all();
        $kafedras = Kafedra::all();
        $yonalish = Yonalish::all();
        return view('admin.login.kursant.create', compact('kurs', 'guruhs', 'kafedras', 'yonalish'));
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
            'email' => 'email|required|unique:users',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id'=>3,
            'kafedra_id'=>$request->kafedra_id,
            'kurs_id'=>$request->kurs_id,
            'guruh_id'=>$request->guruh_id,
            'yonalish_id'=>$request->yonalish_id
        ]);
        return redirect('admin/kursant')->with('succes', "yangi qoshildi");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $kafedra = Kafedra::all();
        $kurs = Kur::all();
        $guruh = Guruh::all();
        return view('admin.login.kursant.edit', compact('kurs', 'kafedra', 'guruh', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
	if($request->email != $user->email){
        $request->validate([
            'email'  =>  'required|unique:users,email,'.$user->id,
        ]);
	}

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id'=>3,
            'kafedra_id'=>$request->kafedra_id,
            'kurs_id'=>$request->kurs_id,
            'guruh_id'=>$request->guruh_id,
            'yonalish_id'=>$request->yonalish_id
        ]);
        if(!is_null($request->password) && $request->password == $request->password_confirmation){
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        };
        return redirect(route('admin.kursant.index'))->with('succes', 'kursant ma\'lumotlari o\'zgartirildi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
