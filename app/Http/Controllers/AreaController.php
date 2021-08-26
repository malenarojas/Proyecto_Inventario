<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{


    public function index()
    {
        $areas=Area::all();
        return view('area.index',['areas'=>$areas]);
    }


    public function create()
    {
        return view('area.create');
    }


    public function store(Request $request)
    {
        $area =new area();
        $area->descripcion=$request->input('descripcion');
        $area->created_at= now();
        $area->updated_at= now();
        $area->save();
        return redirect()->route('area.index');

    }


    public function show($id)
    {
        $area =Area::findOrFail($id);
        return view('area.show', ['area'=>$area]);
    }

    public function edit($id)
    {

        $area =Area::findOrFail($id);
        return view('area.edit',['area'=>$area]);
    }


    public function update(Request $request, $id)
    {
        $area=Area::findOrFail($id);
        $area->descripcion=$request->input('descripcion');
        $area->updated_at= now();
        $area->save();
        return redirect()->route('area.index');
    }


    public function destroy($id)
    {
        $area=Area::findOrFail($id);
        $area->delete();
        return redirect()->route('area.index');
    }
}
