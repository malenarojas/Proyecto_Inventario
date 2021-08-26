<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{

    public function index()
    {
        $categorias=Categoria::all();
        return view('categoria.index',['categorias'=>$categorias]);
    }


    public function create()
    {
        return view('categoria.create');
    }


    public function store(Request $request)
    {
        $categoria =new Categoria();
        $categoria->descripcion=$request->input('descripcion');
        $categoria->created_at= now();
        $categoria->updated_at= now();
        $categoria->save();
        return redirect()->route('categoria.index');
    }


    public function show($id)
    {
        $categoria =Categoria::findOrFail($id);
        return view('categoria.show', ['categoria'=>$categoria]);
    }


    public function edit($id)
    {
        $categoria =Categoria::findOrFail($id);
        return view('categoria.edit',['categoria'=>$categoria]);
    }


    public function update(Request $request, $id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->descripcion=$request->input('descripcion');
        $categoria->updated_at= now();
        $categoria->save();
        return redirect()->route('categoria.index');
    }

    public function destroy($id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
    public function buscarcategoria(Request $request)
    {
        //  $nombre_producto = Producto::where('nombre','like','%'.$nombre_producto.'%')->get(['id','nombre','precio']);
        $id_categoria=$request->input('id');
        $categoria=Categoria::where('id','like','%'.$id_categoria.'%')->get(['id','descripcion']);
        if($categoria->isEmpty()){
            return 0;
        }
        else {
            return Response(json_encode($categoria),200)->header('Content-type', 'text/plain');
        }
    }
}
