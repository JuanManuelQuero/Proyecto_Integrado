<?php

use App\Http\Controllers\MobileController;
use App\Http\Controllers\Oath\GitHubController;
use App\Http\Controllers\CommentController;
use App\Http\Livewire\IndexMobiles;
use App\Http\Livewire\IndexUsers;
use App\Models\Mobile;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $mobile1 = Mobile::orderBy('modelo', 'asc')->where('marca', 'Apple')->get();
    return view('dashboard', compact('mobile1'));
})->name('dashboard');


//Ruta para ver la vista de todos los móviles
Route::middleware(['auth:sanctum', 'verified'])->resource('mobiles', MobileController::class);

//Ruta que simula la venta de un móvil
Route::middleware(['auth:sanctum', 'verified'])->post('mobiles/{id}', 'App\Http\Controllers\MobileController@venderMovil')->name('mobiles.venderMovil');

//Ruta para ver el CRUD de la tabla móviles
Route::middleware(['auth:sanctum', 'verified'])->get('crudmobiles', IndexMobiles::class)->name('mobiles.crud');

//Ruta para ver el CRUD de la tabla usuarios
Route::middleware(['auth:sanctum', 'verified'])->get('crudusers', IndexUsers::class)->name('users.crud');

//Rutas para mostrar y enviar el mensaje de contacto
Route::middleware(['auth:sanctum', 'verified'])->get('contacto', "App\Http\Controllers\ContactoController@index")->name('contacto.index');
Route::middleware(['auth:sanctum', 'verified'])->post('contacto', "App\Http\Controllers\ContactoController@enviar")->name('contacto.enviar');

//Rutas para el login con github
Route::get('auth/github/redirect', [GitHubController::class, 'redirect'])->name('github.redirect');
Route::get('auth/github/callback', [GitHubController::class, 'callback'])->name('github.callback');


//Rutas para los comentarios
Route::middleware(['auth:sanctum', 'verified'])->post('/mobiles/{mobile}/comments', 'App\Http\Controllers\CommentController@create')->name('comments.create');
Route::middleware(['auth:sanctum', 'verified'])->delete('/mobiles/mobile/{comment}', 'App\Http\Controllers\CommentController@destroy')->name('comments.destroy');
