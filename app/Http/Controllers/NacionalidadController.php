<?php

namespace App\Http\Controllers;
//use resources\views\nacionalidad;
use App\Models\Nacionalidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NacionalidadController extends Controller
{
    public function index()
    {
        $nacionalidades=Nacionalidad::all();
        //return $nacionalidades;
        return view('nacionalidad.index',['nacionalidades'=>$nacionalidades]);
    }


    public function create()
    {
        return view('nacionalidad.create');
    }


    public function store(Request $request)
    {
        //$nacionalidad =new Nacionalidad();
        $id=$request->input('id_nacionalidad');
        $nombre_pais=$request->input('nombre_pais');
        $created_at= now();
        $updated_at= now();
        DB::table('nacionalidad')->insert([
            'id_nacionalidad'=>$id,
            'nombre_pais' => $nombre_pais,
            'created_at'=>$created_at,
            'updated_at'=>$updated_at,
        ]);
        return redirect()->route('nacionalidad.index');
    }


    public function show($id_nacionalidad)
    {
        $nacionalidades =Nacionalidad::where('id_nacionalidad','=',$id_nacionalidad)->get();
        foreach ($nacionalidades as $n) {
           $nacionalidad=$n;
        }
       //return $nacionalidad;
        return view('nacionalidad.show', ['nacionalidad'=>$nacionalidad]);
        // return view('nacionalidad.show',$nacionalidad);
    }


    public function edit($id_nacionalidad)
    {
        $nacionalidades =Nacionalidad::where('id_nacionalidad','=',$id_nacionalidad)->get();
        foreach ($nacionalidades as $n) $nacionalidad=$n;
        return view('nacionalidad.edit',['nacionalidad'=>$nacionalidad ]);
    }


    public function update(Request $request, $id_nacionalidad)
    {
        $nacionalidades =Nacionalidad::where('id_nacionalidad','=',$id_nacionalidad)->get();
        foreach ($nacionalidades as $n) $nacionalidad=$n;
        $nombre_pais=$request->input('nombre_pais');
        $updated_at= now();
        DB::table('nacionalidad')
            ->where('id_nacionalidad', $id_nacionalidad)
            ->update(['nombre_pais' => $nombre_pais,
                'updated_at'=>$updated_at]);
        //.->update( array('column' => DB::raw( 'column * 2' )
        //
        return redirect()->route('nacionalidad.index');
    }


    public function destroy($id_nacionalidad)
    {
        $nacionalidades =Nacionalidad::where('id_nacionalidad','=',$id_nacionalidad)->get();
        foreach ($nacionalidades as $n) $nacionalidad=$n;
        DB::table('nacionalidad')
            ->where('id_nacionalidad', $id_nacionalidad)
            ->delete();
        return redirect()->route('nacionalidad.index');
    }
    public function buscarnacionalidad(Request $request)
    {
        //  $nombre_producto = Producto::where('nombre','like','%'.$nombre_producto.'%')->get(['id','nombre','precio']);
        $id_nacionalidad=$request->input('id_nacionalidad');
        $nacionalidad=Nacionalidad::where('id_nacionalidad','like','%'.$id_nacionalidad.'%')->get(['id_nacionaliad','nombre_pais']);
        if($nacionalidad->isEmpty()){
            return 0;
        }
        else {
            return Response(json_encode($id_nacionalidad),200)->header('Content-type', 'text/plain');
        }
    }
}
