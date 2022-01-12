<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Daraja;
use App\Models\Kafedra;
use App\Models\Unvon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Utils;

class UserForKafedraboshligi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = User::with('getUnvon', 'getDaraja', 'getKaf')->where('role_id', 1)->orderBy('name', 'asc')->get();
        return view('admin.login.kafedraboshligi.index', compact('data',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kafedra = Kafedra::all();
        $daraja = Daraja::all();
        $unvon = Unvon::all();
        return view('admin.login.kafedraboshligi.create', compact('kafedra', 'daraja', 'unvon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
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
            'role_id'=>1,
            'kafedra_id'=>$request->kafedra_id,
            'unvon_id'=>$request->unvon_id,
            'daraja_id'=>$request->daraja_id
        ]);
        return redirect('admin/kafedrabosh')->with('succes', "yangi qoshildi");
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
        $daraja = Daraja::all();
        $unvon = Unvon::all();
        return view('admin.login.kafedraboshligi.edit', compact('user', 'kafedra', 'daraja', 'unvon'));
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
        $request->validate([
            'email' => 'email|required|unique:users',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id'=>1,
            'kafedra_id'=>$request->kafedra_id,
            'unvon_id'=>$request->unvon_id,
            'daraja_id'=>$request->daraja_id,
        ]);
        if(!is_null($request->password) && $request->password == $request->password_confirmation){
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        };
        return redirect(route('admin.kafedrabosh.index'))->with('succes', 'kafedra boshlig\'i ma\'lumotlari o\'zgartirildi');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('admin.kafedraBoshligi.index'))->with('succes', 'kafedra boshlig\'i o\'chirildi');
    }
}
