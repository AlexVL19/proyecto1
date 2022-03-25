<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control1;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\heladoControl;
use App\Http\Controllers\preciosControl;
use App\Http\Controllers\docenteController;

//invocar el controlador desde su ruta

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

/*
Nombrar la ruta en comillas simples con el nombre de la misma, luego va la coma, seguido de la función y el return.
*/
Route::get('/miruta', function(){
    return 'Hola mundo!';

});

/*
Los parámetros son muy importantes en las rutas de las páginas web y los indicamos entre llaves. Van dentro de la misma ruta.
*/

Route::get('/yournameis/{nombre}', function($nombre){
    return 'Hola, soy ' . $nombre;
});

Route::get('/sumar/{n1},{n2}', function($n1, $n2){
    return 'El resultado es ' . $n1+$n2;
});

Route::get('/controlar/{a},{b}', [control1::class,'suma']);

Route::get('/carrera/{cosa}', [control1::class,'carrera']);

Route::get('/helado/{opc}', [heladoControl::class, 'helado']);

Route::get('/precio/{precio}', [preciosControl::class, 'precio']);

Route::get('/getiva/{price},{producto}', [preciosControl::class, 'getiva']);

Route::resource('curso', cursoController::class);

Route::resource('docente', docenteController::class);
