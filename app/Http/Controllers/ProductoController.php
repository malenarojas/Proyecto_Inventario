<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Nacionalidad;
use App\Models\Marca;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{

    public function index()
    {
        $productos=Producto::all();
        return view('producto.index',['productos'=>$productos]);
    }


    public function create()
    {
        $categorias=Categoria::all();
        $nacionalidades=Nacionalidad::all();
        $marcas=Marca::all();
      return view('producto.create',['categorias'=>$categorias,'nacionalidades'=>$nacionalidades,'marcas'=>$marcas]);
    }


    public function store(Request $request)
    {
        $codigo=$request->input('codigo');
        $nombre=$request->input('nombre');
        $descripcion_tecnica=$request->input('descripcion_tecnica');
        $medida=$request->input('medida');
        $stock_minimo=$request->input('stock_minimo');
        $cantidad=$request->input('cantidad');
        $estado=$request->input('estado');
        $precio_compra_USD=$request->input('precio_compra_USD');
        $tipo_cambio=$request->input('tipo_cambio');
        $precio_compra_BO=($precio_compra_USD*$tipo_cambio);
        $importe_ganacia=$request->input('importe_ganacia');
        $precio_venta_BO=(($precio_compra_BO*($importe_ganacia/100))+$precio_compra_BO);
        $precio_venta_USD=($precio_venta_BO*$tipo_cambio);
        $categoria_id=$request->input('categoria_id');
        $nacionalidad_id=$request->input('nacionalidad_id');
        $marca_id=$request->input('marca_id');
        $created_at= now();
        $updated_at= now();
        DB::table('producto')->insert([
            'codigo'=>$codigo,
            'nombre' => $nombre,
            'descripcion_tecnica'=>$descripcion_tecnica,
            'medida'=>$medida,
            'stock_minimo'=>$stock_minimo,
            'cantidad'=>$cantidad,
            'estado'=>$estado,
            'precio_compra_USD'=>$precio_compra_USD,
            'tipo_cambio'=>$tipo_cambio,
            'precio_compra_BO'=>$precio_compra_BO,
            'importe_ganacia'=>$importe_ganacia,
            'precio_venta_BO'=>$precio_venta_BO,
            'precio_venta_USD'=>$precio_venta_USD,
            'categoria_id'=>$categoria_id,
            'nacionalidad_id'=>$nacionalidad_id,
            'marca_id'=>$marca_id,
            'created_at'=>$created_at,
            'updated_at'=>$updated_at,

        ]);
        return redirect()->route('producto.index');
    }


    public function show($codigo)
    {
        $productos =Producto::where('codigo','=',$codigo)->get();
        foreach ($productos as $n) {
            $producto=$n;
        }
        return view('producto.show', ['producto'=>$producto]);

    }


    public function edit($codigo)
    {
        $productos =Producto::where('codigo','=',$codigo)->get();
        foreach ($productos as $n) {
            $producto=$n;
        }
        $categorias=Categoria::all();
        $nacionalidades=Nacionalidad::all();
        $marcas=Marca::all();
        return view('producto.edit',['producto'=>$producto,'categorias'=>$categorias,'nacionalidades'=>$nacionalidades,'marcas'=>$marcas]);

    }


    public function update(Request $request, $codigo)
    {
        $productos =Producto::where('codigo','=',$codigo)->get();
        foreach ($productos as $n) $producto=$n;
        //$codigo=$request->input('codigo');
        $nombre=$request->input('nombre');
        $descripcion_tecnica=$request->input('descripcion_tecnica');
        $medida=$request->input('medida');
        $stock_minimo=$request->input('stock_minimo');
        $cantidad=$request->input('cantidad');
        $estado=$request->input('estado');
        $precio_compra_USD=$request->input('precio_compra_USD');
        $tipo_cambio=$request->input('tipo_cambio');
        $precio_compra_BO=($precio_compra_USD*$tipo_cambio);
        $importe_ganacia=$request->input('importe_ganacia');
        $precio_venta_BO=(($precio_compra_BO*($importe_ganacia/100))+$precio_compra_BO);
        $precio_venta_USD=($precio_venta_BO*$tipo_cambio);
        $categoria_id=$request->input('categoria_id');
        $nacionalidad_id=$request->input('nacionalidad_id');
        $marca_id=$request->input('marca_id');
        $updated_at= now();
        DB::table('producto')
            ->where('codigo', $codigo)
            ->update([
                'nombre' => $nombre,
                'descripcion_tecnica'=>$descripcion_tecnica,
                'medida'=>$medida,
                'stock_minimo'=>$stock_minimo,
                'cantidad'=>$cantidad,
                'estado'=>$estado,
                'precio_compra_USD'=>$precio_compra_USD,
                'tipo_cambio'=>$tipo_cambio,
                'precio_compra_BO'=>$precio_compra_BO,
                'importe_ganacia'=>$importe_ganacia,
                'precio_venta_BO'=>$precio_venta_BO,
                'precio_venta_USD'=>$precio_venta_USD,
                'categoria_id'=>$categoria_id,
                'nacionalidad_id'=>$nacionalidad_id,
                'marca_id'=>$marca_id,
                'updated_at'=>$updated_at
            ]);
        return redirect()->route('producto.index');

    }


    public function destroy($codigo)
    {
        $productos =Producto::where('codigo','=',$codigo)->get();
        foreach ($productos as $n) {
            $producto=$n;
        }
        DB::table('producto')
            ->where('codigo', $codigo)
            ->delete();
        return redirect()->route('producto.index');

    }
    public function buscar(Request $request)
    {
      //  $nombre_producto = Producto::where('nombre','like','%'.$nombre_producto.'%')->get(['id','nombre','precio']);
     $producto_codigo=$request->input('codigo');
     $producto=Producto::where('codigo','like','%'.$producto_codigo.'%')->get(['codigo','nombre','precio_compra_USD']);
     if($producto->isEmpty()){
        return 0;
     }
     else {
         return Response(json_encode($producto),200)->header('Content-type', 'text/plain');
     }
    }
}
