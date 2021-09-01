<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\EstanteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TipoPersonalController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\NacionalidadController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'area'],function (){
    Route::get('/',[AreaController::class,'index'])->name('area.index');
    Route::post('/',[AreaController::class,'store'])->name('area.store');
    Route::get('/create',[AreaController::class,'create'])->name('area.create');
    Route::get('/{id}',[AreaController::class,'show'])->name('area.show');
    Route::put('/{id}',[AreaController::class,'update'])->name('area.update');
    Route::get('/{id}/edit',[AreaController::class,'edit'])->name('area.edit');
    Route::get('/{id}/destroy',[AreaController::class,'destroy'])->name('area.destroy');
});
Route::group(['prefix'=>'estante'],function (){
    Route::get('/',[EstanteController::class,'index'])->name('estante.index');
    Route::post('/',[EstanteController::class,'store'])->name('estante.store');
    Route::get('/create',[EstanteController::class,'create'])->name('estante.create');
    Route::get('/{id}',[EstanteController::class,'show'])->name('estante.show');
    Route::put('/{id}',[EstanteController::class,'update'])->name('estante.update');
    Route::get('/{id}/edit',[EstanteController::class,'edit'])->name('estante.edit');
    Route::get('/{id}/destroy',[EstanteController::class,'destroy'])->name('estante.destroy');
});
Route::group(['prefix'=>'producto'],function (){
    Route::get('/buscar',[ProductoController::class,'buscar'])->name('producto.buscar');
    Route::get('/',[ProductoController::class,'index'])->name('producto.index');
    Route::post('/',[ProductoController::class,'store'])->name('producto.store');
    Route::get('/create',[ProductoController::class,'create'])->name('producto.create');
    Route::get('/{id}',[ProductoController::class,'show'])->name('producto.show');
    Route::put('/{id}',[ProductoController::class,'update'])->name('producto.update');
    Route::get('/{id}/edit',[ProductoController::class,'edit'])->name('producto.edit');
    Route::get('/{id}/destroy',[ProductoController::class,'destroy'])->name('producto.destroy');
});

Route::group(['prefix'=>'ubicacion'],function (){
    Route::get('/',[UbicacionController::class,'index'])->name('ubicacion.index');
    Route::post('/',[UbicacionController::class,'store'])->name('ubicacion.store');
    Route::get('/create',[UbicacionController::class,'create'])->name('ubicacion.create');
    Route::get('/{id}',[UbicacionController::class,'show'])->name('ubicacion.show');
    Route::put('/{id}',[UbicacionController::class,'update'])->name('ubicacion.update');
    Route::get('/{id}/edit',[UbicacionController::class,'edit'])->name('ubicacion.edit');
    Route::get('/{id}/destroy',[UbicacionController::class,'destroy'])->name('ubicacion.destroy');
});
Route::group(['prefix'=>'categoria'],function (){
    Route::get('/',[CategoriaController::class,'index'])->name('categoria.index');
    Route::post('/',[CategoriaController::class,'store'])->name('categoria.store');
    Route::get('/create',[CategoriaController::class,'create'])->name('categoria.create');
    Route::get('/{id}',[CategoriaController::class,'show'])->name('categoria.show');
    Route::put('/{id}',[CategoriaController::class,'update'])->name('categoria.update');
    Route::get('/{id}/edit',[CategoriaController::class,'edit'])->name('categoria.edit');
    Route::get('/{id}/destroy',[CategoriaController::class,'destroy'])->name('categoria.destroy');
});
Route::group(['prefix'=>'marca'],function (){
    Route::get('/',[MarcaController::class,'index'])->name('marca.index');
    Route::post('/',[MarcaController::class,'store'])->name('marca.store');
    Route::get('/create',[MarcaController::class,'create'])->name('marca.create');
    Route::get('/{id}',[MarcaController::class,'show'])->name('marca.show');
    Route::put('/{id}',[MarcaController::class,'update'])->name('marca.update');
    Route::get('/{id}/edit',[MarcaController::class,'edit'])->name('marca.edit');
    Route::get('/{id}/destroy',[MarcaController::class,'destroy'])->name('marca.destroy');
});
Route::group(['prefix'=>'nacionalidad'],function (){
    Route::get('/',[NacionalidadController::class,'index'])->name('nacionalidad.index');
    Route::post('/',[NacionalidadController::class,'store'])->name('nacionalidad.store');
    Route::get('/create',[NacionalidadController::class,'create'])->name('nacionalidad.create');
    Route::get('/{id}',[NacionalidadController::class,'show'])->name('nacionalidad.show');
    Route::put('/{id}',[NacionalidadController::class,'update'])->name('nacionalidad.update');
    Route::get('/{id}/edit',[NacionalidadController::class,'edit'])->name('nacionalidad.edit');
    Route::get('/{id}/destroy',[NacionalidadController::class,'destroy'])->name('nacionalidad.destroy');
});
Route::group(['prefix'=>'tipopersonal'],function (){
    Route::get('/',[TipopersonalController::class,'index'])->name('tipopersonal.index');
    Route::post('/',[TipopersonalController::class,'store'])->name('tipopersonal.store');
    Route::get('/create',[TipopersonalController::class,'create'])->name('tipopersonal.create');
    Route::get('/{id}',[TipopersonalController::class,'show'])->name('tipopersonal.show');
    Route::put('/{id}',[TipopersonalController::class,'update'])->name('tipopersonal.update');
    Route::get('/{id}/edit',[TipopersonalController::class,'edit'])->name('tipopersonal.edit');
    Route::get('/{id}/destroy',[TipopersonalController::class,'destroy'])->name('tipopersonal.destroy');
});
Route::group(['prefix'=>'personal'],function (){
    Route::get('/',[PersonalController::class,'index'])->name('personal.index');
    Route::post('/',[PersonalController::class,'store'])->name('personal.store');
    Route::get('/create',[PersonalController::class,'create'])->name('personal.create');
    Route::get('/{id}',[PersonalController::class,'show'])->name('personal.show');
    Route::put('/{id}',[PersonalController::class,'update'])->name('personal.update');
    Route::get('/{id}/edit',[PersonalController::class,'edit'])->name('personal.edit');
    Route::get('/{id}/destroy',[PersonalController::class,'destroy'])->name('personal.destroy');
});
Route::group(['prefix'=>'User'],function (){
    Route::get('/',[UserController::class,'index'])->name('User.index');
    Route::post('/',[UserController::class,'store'])->name('User.store');
    Route::get('/create',[UserController::class,'create'])->name('User.create');
    Route::get('/{id}',[UserController::class,'show'])->name('User.show');
    Route::put('/{id}',[UserController::class,'update'])->name('User.update');
    Route::get('/{id}/edit',[UserController::class,'edit'])->name('User.edit');
    Route::get('/{id}/destroy',[UserController::class,'destroy'])->name('User.destroy');
});
Route::group(['prefix'=>'proveedor'],function (){
    Route::get('/buscarproveedor',[ProveedorController::class,'buscarproveedor'])->name('proveedor.buscarproveedor');
    Route::get('/',[ProveedorController::class,'index'])->name('proveedor.index');
    Route::post('/',[ProveedorController::class,'store'])->name('proveedor.store');
    Route::get('/create',[ProveedorController::class,'create'])->name('proveedor.create');
    Route::get('/{id}',[ProveedorController::class,'show'])->name('proveedor.show');
    Route::put('/{id}',[ProveedorController::class,'update'])->name('proveedor.update');
    Route::get('/{id}/edit',[ProveedorController::class,'edit'])->name('proveedor.edit');
    Route::get('/{id}/destroy',[ProveedorController::class,'destroy'])->name('proveedor.destroy');
});
Route::group(['prefix'=>'compra'],function (){
    Route::get('/',[CompraController::class,'index'])->name('compra.index');
    Route::post('/',[CompraController::class,'store'])->name('compra.store');
    Route::get('/create',[CompraController::class,'create'])->name('compra.create');
    Route::get('/{id}',[CompraController::class,'show'])->name('compra.show');
    Route::put('/{id}',[CompraController::class,'update'])->name('compra.update');
    Route::get('/{id}/edit',[CompraController::class,'edit'])->name('compra.edit');
    Route::get('/{id}/destroy',[CompraController::class,'destroy'])->name('compra.destroy');
    Route::get('/eliminar_detalle/{id_compra}/{id_detalle}',[CompraController::class,'eliminar_detalle'])->name('compra.eliminar_detalle');
});
Route::group(['prefix'=>'cliente'],function (){
    Route::get('/',[ClienteController::class,'index'])->name('cliente.index');
    Route::post('/',[ClienteController::class,'store'])->name('cliente.store');
    Route::get('/create',[ClienteController::class,'create'])->name('cliente.create');
    Route::get('/{id}',[ClienteController::class,'show'])->name('cliente.show');
    Route::put('/{id}',[ClienteController::class,'update'])->name('cliente.update');
    Route::get('/{id}/edit',[ClienteController::class,'edit'])->name('cliente.edit');
    Route::get('/{id}/destroy',[ClienteController::class,'destroy'])->name('cliente.destroy');
});
Route::group(['prefix'=>'venta'],function (){
    Route::get('/',[VentaController::class,'index'])->name('venta.index');
    Route::post('/',[VentaController::class,'store'])->name('venta.store');
    Route::get('/create',[VentaController::class,'create'])->name('venta.create');
    Route::get('/{id}',[VentaController::class,'show'])->name('venta.show');
    Route::put('/{id}',[VentaController::class,'update'])->name('venta.update');
    Route::get('/{id}/edit',[VentaController::class,'edit'])->name('venta.edit');
    Route::get('/{id}/destroy',[VentaController::class,'destroy'])->name('venta.destroy');
});

Route::get('prueba',function (){
   /* $precio_compra=62.64;
    $porcentaje_ganacia=10.0;
    $precio_venta=(($precio_compra*($porcentaje_ganacia/100))+$precio_compra);*/
    $X=10;
    $Z=5.68;
    return $X*$Z;

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::group(['prefix'=>'users'],function (){
    Route::get('/',[UserController::class,'index'])->name('users.index');
    Route::post('/',[UserController::class,'store'])->name('users.store');
    Route::get('/create',[UserController::class,'create'])->name('users.create');
    Route::get('/{id}',[UserController::class,'show'])->name('users.show');
    Route::put('/{id}',[UserController::class,'update'])->name('users.update');
    Route::get('/{id}/edit',[UserController::class,'edit'])->name('users.edit');
    Route::get('/{id}/destroy',[UserController::class,'destroy'])->name('users.destroy');
});
