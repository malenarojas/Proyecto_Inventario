<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{

    public function index()
    {
        $personales=Personal::all();
        return view('personal.index',['personales'=>$personales]);
    }

    public function create()
    {
        return view('personal.create');
    }


    public function store(Request $request)
    {
        $personal =new Personal();
        $personal->nombre=$request->input('nombre');
        $personal->apellido=$request->input('apellido');
        $personal->CI=$request->input('CI');
        $personal->telefono=$request->input('telefono');
        $personal->sexo=$request->input('sexo');
        $personal->direccion=$request->input('direccion');
        $personal->tipopersonal_id=$request->input('tipopersonal_id');
        $personal->created_at= now();
        $personal->updated_at= now();
        $personal->save();
        return redirect()->route('personal.index');
    }


    public function show($id)
    {
        $personal =Personal::findOrFail($id);
        return view('personal.show', ['personal'=>$personal]);
    }


    public function edit($id)
    {
        $personal =Personal::findOrFail($id);
        return view('personal.edit',['personal'=>$personal]);
    }


    public function update(Request $request, $id)
    {
        $personal =Personal::findOrFail($id);
        $personal->nombre=$request->input('nombre');
        $personal->apellido=$request->input('apellido');
        $personal->CI=$request->input('CI');
        $personal->telefono=$request->input('telefono');
        $personal->sexo=$request->input('sexo');
        $personal->direccion=$request->input('direccion');
        $personal->tipopersonal_id=$request->input('tipopersonal_id');
        $personal->updated_at= now();
        $personal->save();
        return redirect()->route('personal.index');

    }


    public function destroy($id)
    {
        $personal=Personal::findOrFail($id);
        $personal->delete();
        return redirect()->route('personal.index');
    }
}
