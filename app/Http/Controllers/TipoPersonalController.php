<?php

namespace App\Http\Controllers;

use App\Models\Tipo_personal;
use Illuminate\Http\Request;

class TipoPersonalController extends Controller
{
    public function index()
    {
        $tipoppersonales=tipo_personal::all();
        return view('tipopersonal.index',['tipopersonales'=>$tipoppersonales]);
    }


    public function create()
    {
        return view('tipopersonal.create');
    }


    public function store(Request $request)
    {
        $tipopersonal =new tipo_personal();
        $tipopersonal->cargo=$request->input('cargo');
        $tipopersonal->created_at= now();
        $tipopersonal->updated_at= now();
        $tipopersonal->save();
        return redirect()->route('area.index');
    }


    public function show($id)
    {
        $tipopersonal =tipo_personal::findOrFail($id);
        return view('tipopersonal.show', ['tipopersonal'=>$tipopersonal]);
    }


    public function edit($id)
    {
        $tipopersonal =tipo_personal::findOrFail($id);
        return view('tipopersonal.edit',['tipopersonal '=>$tipopersonal]);
    }


    public function update(Request $request, $id)
    {
        $tipopersonal=tipo_personal::findOrFail($id);
        $tipopersonal->cargo=$request->input('cargo');
        $tipopersonal->updated_at= now();
        $tipopersonal->save();
        return redirect()->route('tipopersonal.index');
    }


    public function destroy($id)
    {
        $tipopersonal=tipo_personal::findOrFail($id);
        $tipopersonal->delete();
        return redirect()->route('tipopersonal.index');
    }
}
