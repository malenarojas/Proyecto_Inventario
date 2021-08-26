<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use App\Models\estante;
use App\Models\area;
use App\Models\Producto;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{

    public function index()
    {
        $ubicaciones=Ubicacion::all();
        return view('ubicacion.index',['ubicaciones'=>$ubicaciones]);
    }


    public function create()
    {
        $areas=Area::all();
        $estantes=Estante::all();
        return view('ubicacion.create',['areas'=>$areas,'estantes'=>$estantes]);
    }


    public function store(Request $request)
    {
        $ubicacion =new Ubicacion();
        $ubicacion->descripcion=$request->input('descripcion');
        $ubicacion->area_id=$request->input('area_id');
        $ubicacion->estante_id=$request->input('estante_id');
        $ubicacion->producto_codigo=$request->input('producto_codigo');
        $ubicacion->created_at= now();
        $ubicacion->updated_at= now();
        $ubicacion->save();
        return redirect()->route('ubicacion.index');
    }


    public function show($id)
    {
        $ubicacion =Ubicacion::findOrFail($id);
        return view('ubicacion.show', ['ubicacion'=>$ubicacion]);

    }


    public function edit($id)
    {
        $ubicacion =Ubicacion::findOrFail($id);
        $areas=Area::all();
        $estantes=Estante::all();
        return view('ubicacion.edit', ['ubicacion'=>$ubicacion,'areas'=>$areas,'estantes'=>$estantes]);
    }

    public function update(Request $request, $id)
    {
        $ubicacion =Ubicacion::findOrFail($id);
        $ubicacion->descripcion=$request->input('descripcion');
        $ubicacion->area_id=$request->input('area_id');
        $ubicacion->estante_id=$request->input('estante_id');
        $ubicacion->producto_codigo=$request->input('producto_codigo');
        $ubicacion->updated_at= now();
        $ubicacion->save();
        return redirect()->route('ubicacion.index');

    }

    public function destroy($id)
    {
        $ubicacion=Ubicacion::findOrFail($id);
        $ubicacion->delete();
        return redirect()->route('ubicacion.index');
    }
}
