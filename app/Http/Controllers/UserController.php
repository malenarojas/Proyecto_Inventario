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
        $user = User::create($request->only('name', 'username', 'email', 'personal_id')
            + [
                'password' => bcrypt($request->input('password')),
            ]);

        $roles = $request->input('roles', []);
        $user->syncRoles($roles);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario creado correctamente');

    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.show', ['cliente' => $cliente]);

    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', ['cliente' => $cliente]);
    }


    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->direccion = $request->input('direccion');
        $cliente->telefono = $request->input('telefono');
        $cliente->correo = $request->input('correo');
        $cliente->updated_at = now();
        $cliente->save();
        return redirect()->route('cliente.index');
    }


    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
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
