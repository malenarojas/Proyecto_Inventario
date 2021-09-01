<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $cliente=Cliente::all();
        return view('cliente.index',['cliente'=>$cliente]);

    }


    public function create()
    {
        return view('cliente.create');
    }


    public function store(Request $request)
    {

        $cliente =new Cliente();
        $cliente->nombre=$request->input('nombre');
        $cliente->direccion=$request->input('direccion');
        $cliente->telefono=$request->input('telefono');
        $cliente->correo=$request->input('correo');
        $cliente->created_at= now();
        $cliente->updated_at= now();
        $cliente->save();
        return redirect()->route('cliente.index');}

    public function show($id)
    {
        $cliente =Cliente::findOrFail($id);
        return view('cliente.show', ['cliente'=>$cliente]);

    }
    public function edit($id)
    {
        $cliente =Cliente::findOrFail($id);
        return view('cliente.edit',['cliente'=>$cliente]);
    }


    public function update(Request $request, $id)
    {
        $cliente =Cliente::findOrFail($id);
        $cliente->nombre=$request->input('nombre');
        $cliente->direccion=$request->input('direccion');
        $cliente->telefono=$request->input('telefono');
        $cliente->correo=$request->input('correo');
        $cliente->updated_at= now();
        $cliente->save();
        return redirect()->route('cliente.index');
    }


    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
    public function buscarcliente(Request $request)
    {
        $cliente_id=$request->input('id');
        $cliente=Proveedor::where('id_cliente','=',$cliente_id)->get(['id_cliente','nombre']);
        if($cliente->isEmpty()){
            return 0;
        }
        else {
            return Response(json_encode($cliente),200)->header('Content-type', 'text/plain');
        }
    }
}
