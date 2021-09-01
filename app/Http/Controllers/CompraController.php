<?php

namespace App\Http\Controllers;

use App\Models\DetalleCompra;
use App\Models\producto;
use Illuminate\Http\Request;
use App\Models\Compra;
use Illuminate\Support\Facades\DB;

class CompraController extends Controller
{

    public function index()
    {
        $compras=Compra::all();
        return view('compra.index',['compras'=>$compras]);
    }


    public function create()
    {
        return view('compra.create');

    }


    public function store(Request $request)
    {
        $compra =new Compra();
        $compra->proveedor_id=$request->input('proveedor_id');
<<<<<<< HEAD
        //$compra->personal_id=auth()->users()->personal_id;
        $compra->personal_id=133;
=======
        $compra->personal_id=auth()->user()->personal_id;
>>>>>>> 541b572b90052cf7430d904d7528136cb268ed03
        $compra->total_USD=0.0;
        $compra->tipo_cambio=$request->input('tipo_cambio');
        $compra->total_BO=0.0;
        $compra->fecha=now()->format('d-m-Y');
        $compra->created_at= now();
        $compra->updated_at= now();
        $compra->save();
        return redirect()->route('compra.show',$compra);
    }


    public function show($id)
    {
        $compra =Compra::findOrFail($id);
        $detallecompra=DetalleCompra::where('compra_id','=',$id)->get();
        return view('compra.show', ['compra'=>$compra,'detallecompras'=>$detallecompra],);

    }


    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        //dd($request);
        $compra=Compra::findOrFail($id);
        $detallecompra=new DetalleCompra();
        $detallecompra->compra_id=$compra->id;
        $detallecompra->producto_id=$request->input('producto_codigo');
        $detallecompra->cantidad=$request->input('cantidad');
        $cantidad=$request->input('cantidad');
        $detallecompra->precio_unitario=$request->input('precio_unitario');
        $precio_u=$request->input('precio_unitario');
        $detallecompra->subtotal_USD=($cantidad*$precio_u);
        $subtotal_USD=($cantidad*$precio_u);
        $detallecompra->tipo_cambio=$request->input('tipo_cambio');
        $tipo_cambio=$request->input('tipo_cambio');
        $detallecompra->subtotal_BO=($subtotal_USD*$tipo_cambio);
        $detallecompra->save();
        $compra->total_USD=$compra->total_USD+$subtotal_USD;
        $compra->total_BO=$compra->total_BO+($subtotal_USD*$tipo_cambio);
        $compra->updated_at= now();
        $compra->save();
        //TODO:PRIMERO HACER UN WHERE Y OBTENER LA CANTIDAD DEL PRODUCTO (WHERE)(FOREACH)
        //DESCOMENTAR EL UPDATE Y ACTUALIZAR EL PRECIO Y LA CANTIDAD OBTENIDA ANTERIOR MENTE SUMANDOLE LA NUEVA QUE MANDA REQUEST
        /*ACTUALIZANDO EL STOCK DE PRODUCTO*/
        $producto_codigo = $request->input('producto_codigo');
        $stock_array= Producto::where('codigo','=',$producto_codigo)->get(['cantidad']);
        foreach($stock_array as $item)
        { $stock = $item->cantidad;}
        DB::table('producto')
            ->where('codigo', $producto_codigo)
            ->update([
                'cantidad'=>$stock+$cantidad,
            ]);
        return redirect()->route('compra.show',$compra);
    }
    public function destroy($id)
    {
        $compra=Compra::findOrFail($id);
        $compra->delete();
        return redirect()->route('compra.index');
    }


    public function eliminar_detalle($id_compra,$id_detalle)
    {
        /*OBETNIENDO LOS DATOS DEL DETALLE*/
        $detalle_compra=DetalleCompra::findOrFail($id_detalle);
        $cantidad=$detalle_compra->cantidad;
        $subtotal_USD=$detalle_compra->subtotal_USD;
        $cantidad_restar_BO=$detalle_compra->subtotal_BO;
        $cantidad_restar_USD=($subtotal_USD);
        $producto_codigo=$detalle_compra->producto_id;
        $detalle_compra->delete();

        /*ACTUALIZANDO LA COMPRA*/
        $compra=Compra::findOrFail($id_compra);
        $compra->total_USD=$compra->total_USD-$cantidad_restar_USD;
        $compra->total_BO=$compra->total_BO-$cantidad_restar_BO;
        $compra->save();

        /*ACTUALIZANDO EL STOCK DE PRODUCTO*/
        $stock_array= Producto::where('codigo','=',$producto_codigo)->get(['cantidad']);
        foreach($stock_array as $item)
        { $stock = $item->cantidad;}
        DB::table('producto')
            ->where('codigo', $producto_codigo)
            ->update([
                'cantidad'=>$stock-$cantidad,
            ]);
        return redirect()->route('compra.show',$compra);

    }

}
