<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Empleadocontroller;
use App\Http\Controllers\Afiliadocontroller;
use App\Http\Controllers\Retirocontroller;
use App\Http\Controllers\Depositocontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/afiliado', function () {
    return view('afiliado.index');
});


route::resource('/empleado','App\Http\Controllers\Empleadocontroller');
route::resource('/afiliado','App\Http\Controllers\Afiliadocontroller');

route::resource('/retiro','App\Http\Controllers\Retirocontroller');
route::get('/retiro/{id}/{id2}',[Retirocontroller::class,'show']);
route::get('/retiro/create/{id}/{id2}',[Retirocontroller::class,'create']);

route::resource('/deposito','App\Http\Controllers\Depositocontroller');
route::get('/deposito/{id}/{id2}',[Depositocontroller::class,'show']);
route::get('/deposito/create/{id}/{id2}',[Depositocontroller::class,'create']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
