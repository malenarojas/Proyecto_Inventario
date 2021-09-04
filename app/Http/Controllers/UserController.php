<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);

    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|min:3|max:5',
        //     'username' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required'
        // ]);
        $users =new User();
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->password=$request->input('password');
        $users->personal_id=$request->input('personal_id');
        $users->created_at= now();
        $users->updated_at= now();
        $users->save();
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $users = User::findOrFail($id);
        return view('users.show', ['users' => $users]);

    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('users.edit', ['users' => $users]);
    }


    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->password=$request->input('password');
        $users->personal_id=$request->input('personal_id');
        $users->updated_at = now();
        $users->save();
        rusersedirect()->route('users.index');
    }


    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('users.index');
    }

    public function buscarcliente(Request $request)
    {
        $cliente_id = $request->input('id');
        $cliente = Proveedor::where('id_cliente', '=', $cliente_id)->get(['id_cliente', 'nombre']);
        if ($cliente->isEmpty()) {
            return 0;
        } else {
            return Response(json_encode($cliente), 200)->header('Content-type', 'text/plain');
        }
    }
}
