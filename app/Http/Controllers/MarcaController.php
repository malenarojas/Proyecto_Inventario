<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{

    public function index()
    {
        $marcas=Marca::all();
        return view('marca.index',['marcas'=>$marcas]);
    }


    public function create()
    {
        return view('marca.create');
    }


    public function store(Request $request)
    {
        $marca =new Marca();
        //$marca->id_marca=$request->input('id_marca');
        $marca->descripcion=$request->input('descripcion');
        $marca->created_at= now();
        $marca->updated_at= now();
        $marca->save();
        return redirect()->route('marca.index');
    }


    public function show($id)
    {
        $marca =Marca::findOrFail($id);
        return view('marca.show', ['marca'=>$marca]);
    }


    public function edit($id)
    {
        $marca =Marca::findOrFail($id);
        return view('marca.edit', ['marca'=>$marca]);
    }


    public function update(Request $request, $id)
    {
        $marca=Marca::findOrFail($id);
        //$marca->id_marca=$request->input('id_marca');
        $marca->descripcion=$request->input('descripcion');
        $marca->updated_at= now();
        $marca->save();
        return redirect()->route('marca.index');
    }


    public function destroy($id)
    {
        $marca=Marca::findOrFail($id);
        $marca->delete();
        return redirect()->route('marca.index');
    }
    public function buscarmarca(Request $request)
    {
        //  $nombre_producto = Producto::where('nombre','like','%'.$nombre_producto.'%')->get(['id','nombre','precio']);
        $id_marca=$request->input('id');
        $marca=Marca::where('id','like','%'.$id_marca.'%')->get(['id','descripcion']);
        if($marca->isEmpty()){
            return 0;
        }
        else {
            return Response(json_encode($marca),200)->header('Content-type', 'text/plain');
        }
    }
}
