<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{

    public function index()
    {
        $proveedores=Proveedor::all();
        return view('proveedor.index',['proveedores'=>$proveedores]);
    }


    public function create()
    {
        return view('proveedor.create');
    }


    public function store(Request $request)
    {
        $proveedor =new Proveedor();
        $proveedor->nombre=$request->input('nombre');
        $proveedor->direccion=$request->input('direccion');
        $proveedor->telefono=$request->input('telefono');
        $proveedor->correo=$request->input('correo');
        $proveedor->created_at= now();
        $proveedor->updated_at= now();
        $proveedor->save();
        return redirect()->route('proveedor.index');
    }


    public function show($id)
    {
        $proveedor =Proveedor::findOrFail($id);
        return view('proveedor.show', ['proveedor'=>$proveedor]);
    }


    public function edit($id)
    {
        $proveedor=Proveedor::findOrFail($id);
        return view('proveedor.edit',['proveedor'=>$proveedor]);
    }


    public function update(Request $request, $id)
    {
        $proveedor =Proveedor::findOrFail($id);
        $proveedor->nombre=$request->input('nombre');
        $proveedor->direccion=$request->input('direccion');
        $proveedor->telefono=$request->input('telefono');
        $proveedor->correo=$request->input('correo');
        $proveedor->updated_at= now();
        $proveedor->save();
        return redirect()->route('proveedor.index');
    }


    public function destroy($id)
    {
        $proveedor=Proveedor::findOrFail($id);
        $proveedor->delete();
        return redirect()->route('proveedor.index');

    }
    public function buscarproveedor(Request $request)
    {
        $proveedor_id=$request->input('id');
        $proveedor=Proveedor::where('id','=',$proveedor_id)->get(['id','nombre']);
        if($proveedor->isEmpty()){
            return 0;
        }
        else {
            return Response(json_encode($proveedor),200)->header('Content-type', 'text/plain');
        }
    }
}
