<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('layouts.usersprofile');
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        
        $user->fill([
            'role' => $request->nivel, 
            'gpfcdocente_id' => $request->estado, 

            'name' => $request->nome,
            'gender' => $request->genero,
            'birthday' => $request->dataNascimento,
            'phone' => $request->phno,
            'gpfcdocente_id' => $request->docente,

            'email' => $request->email,
            'password' => Hash::make($request->psw),
        ]);
        $user->save();

        $role = Role::where('id', $request->nivel)->first();

        return redirect( route('user.index') )->with('user.create', "Utilizador criado: " . $request->nome . " | ". $role->designac);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
