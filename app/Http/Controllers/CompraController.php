<?php

namespace App\Http\Controllers;

use App\Models\DetalleCompra;
use Illuminate\Http\Request;
use App\Models\Compra;

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
        //$compra->personal_id=auth()->user()->personal_id;
        $compra->personal_id=133;
        $compra->total_USD=0.0;
        $compra->tipo_cambio=$request->input('tipo_cambio');
        $compra->total_BO=0.0;
        $compra->fecha=now()->format('d-m-Y');
        $compra->created_at= now();
        $compra->updated_at= now();
        $compra->save();

        return redirect()->route('compra.index');
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
        $compra=Compra::findOrFail($id);
        //TODO:hacer las operaciones para actualizar todos los totales
        $compra->total_USD=0.0;
        $compra->total_BO=0.0;
        $compra->updated_at= now();
        $detallecompra=new DetalleCompra();
        //TODO: agregar todos los detalles correspondientes
        $detallecompra->compra_id=$compra->id;
        $detallecompra->producto_id=$request->input('producto_codigo');
        $cantidad=$detallecompra->cantidad=$request->input('cantidad');
        $precio_u=$detallecompra->precio_unitario->input('precio_unitario');
        $subtotal_USD=$detallecompra->subtotal_USD=($cantidad*$precio_u);
        $tipo_cambio=$detallecompra->tipo_cambio->input('tipo_cambio');
        $detallecompra->subtotal_BO=($subtotal_USD*$tipo_cambio);
        $compra->total_USD=$subtotal_USD+$subtotal_USD;
        $compra->total_BO=$subtotal_USD*$tipo_cambio;
        $compra->save();
        $detallecompra->save();


        return view('compra.show',$compra->id);
    }


    public function destroy($id)
    {
        //
    }

}
