<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use App\Models\producto;
use Illuminate\Http\Request;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{

    public function index()
    {
        $ventas=Venta::all();
        return view('venta.index',['ventas'=>$ventas]);
    }


    public function create()
    {
        return view('venta.create');
    }


    public function store(Request $request)
    {
        $venta =new Venta();
        $venta->cliente_id=$request->input('cliente_id');
        //$venta->personal_id=auth()->user()->personal_id;
        $venta->personal_id=133;
        $venta->total_USD=0.0;
        $venta->tipo_cambio=$request->input('tipo_cambio');
        $venta->total_BO=0.0;
        $venta->fecha=now()->format('d-m-Y');
        $venta->forma_pago=$request->input(  'forma_pago');
        $venta->created_at= now();
        $venta->updated_at= now();
        $venta->save();

        return redirect()->route('venta.show',$venta);
    }


    public function show($id)
    {
        $venta =Venta::findOrFail($id);
        $detalleventa=DetalleVenta::where('venta_id','=',$id)->get();
        return view('venta.show', ['venta'=>$venta,'detalleventas'=>$detalleventa],);
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $venta=Venta::findOrFail($id);
        $detalleventa=new DetalleVenta();
        $detalleventa->venta_id=$venta->id;
        $detalleventa->producto_id=$request->input('producto_codigo');
        $detalleventa->cantidad=$request->input('cantidad');
        $cantidad=$request->input('cantidad');
        $detalleventa->precio_unitario=$request->input('precio_unitario');
        $precio_u=$request->input('precio_unitario');
        $detalleventa->subtotal_USD=($cantidad*$precio_u);
        $subtotal_USD=($cantidad*$precio_u);
        $detalleventa->tipo_cambio=$request->input('tipo_cambio');
        $tipo_cambio=$request->input('tipo_cambio');
        $detalleventa->subtotal_BO=($subtotal_USD*$tipo_cambio);
        $detalleventa->save();
        $venta->total_USD=$venta->total_USD+$subtotal_USD;
        $venta->total_BO=$venta->total_BO+($subtotal_USD*$tipo_cambio);
        $venta->updated_at= now();
        $venta->save();
        /*ACTUALIZANDO EL STOCK DE PRODUCTO*/
        $producto_codigo = $request->input('producto_codigo');
        $stock_array= Producto::where('codigo','=',$producto_codigo)->get(['cantidad']);
        foreach($stock_array as $item)
        { $stock = $item->cantidad;}
        DB::table('producto')
            ->where('codigo', $producto_codigo)
            ->update([
                'cantidad'=>$stock-$cantidad,
            ]);
        return redirect()->route('venta.show',$venta);
    }

    public function destroy($id)
    {
        $venta=Venta::findOrFail($id);
        $venta->delete();
        return redirect()->route('venta.index');

    }
    public function eliminar_detalle($id_venta,$id_detalle)
    {
        $detalle_venta=DetalleVenta::findOrFail($id_detalle);
        $cantidad=$detalle_venta->cantidad;
        $subtotal_USD=$detalle_venta->subtotal_USD;
        $cantidad_restar_BO=$detalle_venta->subtotal_BO;
        $cantidad_restar_USD=($subtotal_USD);
        $producto_codigo=$detalle_venta->producto_id;
        $detalle_venta->delete();

        $venta=Venta::findOrFail($id_venta);
        $venta->total_USD=$venta->total_USD-$cantidad_restar_USD;
        $venta->total_BO=$venta->total_BO-$cantidad_restar_BO;
        $venta->save();

        /*ACTUALIZANDO EL STOCK DE PRODUCTO*/
        $stock_array= Producto::where('codigo','=',$producto_codigo)->get(['cantidad']);
        foreach($stock_array as $item)
        { $stock = $item->cantidad;}
        DB::table('producto')
            ->where('codigo', $producto_codigo)
            ->update([
                'cantidad'=>$stock+$cantidad,
            ]);
        return redirect()->route('venta.show',$venta);

    }
}
