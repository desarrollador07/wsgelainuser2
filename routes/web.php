<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadosController;
use App\Http\Controllers\JwtAuthController;


 Route::get('migration', function () {
    Artisan::call('migrate');
 });


Auth::routes();
Route::get('all', 'testController@index');
Route::post('create', 'testController@store');
Route::put('update/{id}', 'testController@update');
Route::delete('delete/{id}', 'testController@destroy');

Route::get('allp', 'pruebaController@index');
Route::post('createp', 'pruebaController@store');
Route::put('updatep/{id}', 'pruebaController@update');
Route::delete('deletep/{id}', 'pruebaController@destroy');

Route::get('allEmpresa', 'empresaController@index');
Route::post('createEmpresa', 'empresaController@store');
Route::put('updateEmpresa/{id}', 'empresaController@update');
Route::delete('deleteEmpresa/{id}', 'empresaController@destroy');


Route::get('allEmpleados', [empleadosController::class, 'index']);
Route::post('createEmpleados', [empleadosController::class,'store']);
Route::put('updateEmpleados/{id}', [empleadosController::class,'update']);
Route::delete('deleteEmpleados/{id}',[empleadosController::class,'destroy']);

Route::get('allArea', 'areaController@index');
Route::post('createArea', 'areaController@store');
Route::put('updateArea/{id}', 'areaController@update');
Route::delete('deleteArea/{id}', 'areaController@destroy');

/*
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/signup', [JwtAuthController::class, 'register']);
    Route::post('/signin', [JwtAuthController::class, 'login']);
    Route::get('/user', [JwtAuthController::class, 'user']);
    Route::post('/token-refresh', [JwtAuthController::class, 'refresh']);
    Route::post('/signout', [JwtAuthController::class, 'signout']);
  // Route::get('allEmpleados', [empleadosController::class, 'index']);
   //Route::post('createEmpleados', [empleadosController::class,'store']);
  // Route::put('updateEmpleados/{id}', [empleadosController::class,'update']);
  // Route::delete('deleteEmpleados/{id}',[empleadosController::class,'destroy']);
});
*/