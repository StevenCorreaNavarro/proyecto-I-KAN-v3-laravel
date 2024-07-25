<?php

namespace App\Http\Controllers;  //// reconocedor de controladores
use App\Models\Home;
use App\Models\Curso;
use App\Models\Registro; 
use App\Models\Store;              //crear esta parte 
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;



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

// git remote add origin https://github.com/StevenCorreaNavarro/example-app.git

Route::get('/', function () {           //http://localhost/example-app/example-app/public/mejos
    return view('homess');
});

/*ruta controlador i kan */
Route::get('/home',[UsuarioController::class,'create'])->name('home.home');
Route::post('home/store', [UsuarioController::class,'store'])->name('home.store');
Route::get('usuario/listar',[UsuarioController::class,'listar'])->name('usuario.listar');
Route::get('usuario/create',[UsuarioController::class,'create'])->name('usuario.create');

//Route::post('usuario/store', [UsuarioController::class,'store'])->name('usuario.store');
Route::get('usuario/{usuario}',[UsuarioController::class,'show'])->name('usuario.show');
Route::put('usuario/{usuario}',[UsuarioController::class,'update'])->name('usuario.update'); //actualizacion de datos
Route::delete('usuario/{usuario}',[UsuarioController::class,'destroy'])->name('usuario.destroy');
Route::get('usuario/{usuario}/editar',[UsuarioController::class,'edit'])->name('usuario.edit');   //actualizacion de datos
Route::get('estilo/casual',[UsuarioController::class,'casual'])->name('casual');
Route::get('estilo/clasico',[UsuarioController::class,'clasico'])->name('clasico');
Route::get('estilo/deportivo',[UsuarioController::class,'deportivo'])->name('deportivo');
Route::get('estilo/urbano',[UsuarioController::class,'urbano'])->name('urbano');
Route::get('salida_amigos',[UsuarioController::class,'salida_amigos'])->name('salida_amigos');
Route::get('boda',[UsuarioController::class,'boda'])->name('boda');
Route::get('negocios',[UsuarioController::class,'negocios'])->name('negocios');
Route::get('noche_de_fiesta',[UsuarioController::class,'noche_fiesta'])->name('noche_fiesta');
Route::get('ocasion',[UsuarioController::class,'ocasion'])->name('ocasion');
Route::get('ubicacion',[UsuarioController::class,'ubicacion'])->name('ubicacion');
Route::get('tiendas_oficiales',[UsuarioController::class,'tiendas'])->name('tiendas');

Route::get('unidad/listar',[UnitController::class,'listardos'])->name('unit.listardos');
Route::post('unidad/storedos', [UnitController::class,'storedos'])->name('unit.storedos');

Route::get('prueba',[UnitController::class,'prueba'])->name('prueba.prueba'); 

Route::get('tiendas_oficiales',[UnitController::class,'listar'])->name('unit.listar');  
Route::get('unidad/create',[UnitController::class,'create'])->name('unit.create');
Route::post('unidad/store', [UnitController::class,'store'])->name('unit.store');
Route::get('unidad/{unit}', [UnitController::class, 'show'])->name('unit.show');
Route::put('unidad/{unit}',[UnitController::class,'update'])->name('unit.update');
Route::get('unidad/{unit}/editar',[UnitController::class,'edit'])->name('unit.edit');
Route::delete('unidad/{unit}',[UnitController::class,'destroy'])->name('unit.destroy');

Route::get('curso/listar',[CursoController::class,'listar'])->name('curso.listar');
Route::get('curso/create',[CursoController::class,'create'])->name('curso.create');
Route::post('curso/store', [CursoController::class,'store'])->name('curso.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');

Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update'); //actualizacion de datos
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');

Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');   //actualizacion de datos

// Route::get('/rutapepe',[ProductController::class,'f_pepe']);          // public function f_pepe() desde product controller
// Route::get('/rutapepecarlos',[ProductController::class,'f_carlos']);  //rutapepecarlos  
// Route::get('/rutasuma/{dato1}/{dato2}',[CalculadoraControler::class,'suma']);
// Route::get('/rutaresta/{dato1}/{dato2}',[CalculadoraControler::class,'resta']);
// Route::get('/rutamult/{dato1}/{dato2}',[CalculadoraControler::class,'multiplicasion']);
// Route::get('/rutadiv/{dato1}/{dato2}',[CalculadoraControler::class,'division']);
// Route::get('/rutaprimo/{dato1}',[CalculadoraControler::class,'primo']);

// Route::get('curso/listar', [CursoController::class, 'listar'])->name('curso.listar');  // funsion listar para consulta en cursocontroller
// Route::get('curso/create', [CursoController::class, 'create']);           // ruta
// Route::post('curso/store', [CursoController::class, 'store'])->name('curso.store');
// Route::get('curso/{curso}', [CursoController::class, 'show'])->name('curso.show'); 
// Route::get('curso/{curso}', [CursoController::class, 'destroy'])->name('curso.destroy'); 

// Route::get('registrarse/registrar', [RegistroController::class, 'registro']);  // funsion que esta en RegistroController
// Route::post('registrarse/store', [RegistroController::class, 'store'])->name('registrar.store'); /*ruta para action en view */

// route::get('login',[Logincontroller::class,'iniciar']);
// route::post('login/store',[LoginController::class,'store'])->name ('login.store');


use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/ing', [HomeController::class,'index'])->middleware('auth');
Route::get('/ingreso', [HomeController::class,'entrar'])->middleware('auth');
// Route::get('/prueba', [HomeController::class,'prueba'])->middleware('auth');

Route::get('/inicio', function () {
    return view('homess');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('ocasion');
})->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

// Route::get('/prueba', function () {
//     return view('prueba');
// })->middleware('auth');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// routes/web.php
Route::get('/mivista', function () {
    return view('prueba'); // Aquí 'mi_vista' se refiere a 'resources/views/mi_vista.blade.php'
});