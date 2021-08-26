<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estante;

class EstanteController extends Controller
{

    public function index()
    {
        $estantes=Estante::all();
        return view('estante.index',['estantes'=>$estantes]);
    }


    public function create()
    {
        return view('estante.create');
    }


    public function store(Request $request)
    {
        $estante =new estante();
        $estante->descripcion=$request->input('descripcion');
        $estante->created_at= now();
        $estante->updated_at= now();
        $estante->save();
        return redirect()->route('estante.index');
    }


    public function show($id)
    {
        $estante =Estante::findOrFail($id);
        return view('estante.show', ['estante'=>$estante]);
    }


    public function edit($id)
    {
        $estante =Estante::findOrFail($id);
        return view('estante.edit',['estante'=>$estante]);
    }


    public function update(Request $request, $id)
    {
        $estante=Estante::findOrFail($id);
        $estante->descripcion=$request->input('descripcion');
        $estante->updated_at= now();
        $estante->save();
        return redirect()->route('estante.index');
    }


    public function destroy($id)
    {
        $estante=Estante::findOrFail($id);
        $estante->delete();
        return redirect()->route('estante.index');
    }
}
