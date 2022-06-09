<?php

use App\Http\Controllers\CartController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', 'App\Http\Controllers\MobileController@dashboard')->name('dashboard');


//Ruta para ver la vista de todos los móviles
Route::middleware(['auth:sanctum', 'verified'])->resource('mobiles', MobileController::class);

//Ruta que simula la venta de un móvil
//Route::middleware(['auth:sanctum', 'verified'])->post('mobiles/{id}', 'App\Http\Controllers\MobileController@venderMovil')->name('mobiles.venderMovil');



//Ruta para ver el CRUD de la tabla móviles
Route::middleware(['auth:sanctum', 'verified'])->middleware('can:mobiles.crud')->get('crudmobiles', IndexMobiles::class)->name('mobiles.crud');

//Ruta para ver el CRUD de la tabla usuarios
Route::middleware(['auth:sanctum', 'verified'])->middleware('can:users.crud')->get('crudusers', IndexUsers::class)->name('users.crud');

//Rutas para mostrar y enviar el mensaje de contacto
Route::middleware(['auth:sanctum', 'verified'])->get('contacto', "App\Http\Controllers\ContactoController@index")->name('contacto.index');
Route::middleware(['auth:sanctum', 'verified'])->post('contacto', "App\Http\Controllers\ContactoController@enviar")->name('contacto.enviar');

//Rutas para el login con github
Route::get('auth/github/redirect', [GitHubController::class, 'redirect'])->name('github.redirect');
Route::get('auth/github/callback', [GitHubController::class, 'callback'])->name('github.callback');


//Rutas para los comentarios
Route::middleware(['auth:sanctum', 'verified'])->post('/mobiles/{mobile}/comments', 'App\Http\Controllers\CommentController@create')->name('comments.create');
Route::middleware(['auth:sanctum', 'verified'])->delete('/mobiles/mobile/{comment}', 'App\Http\Controllers\CommentController@destroy')->name('comments.destroy');

//Ruta para el carrito
Route::middleware(['auth:sanctum', 'verified'])->resource('cart', CartController::class);
Route::middleware(['auth:sanctum', 'verified'])->post('mobiles/{mobile}', 'App\Http\Controllers\MobileController@addCart')->name('mobiles.addCart');
Route::middleware(['auth:sanctum', 'verified'])->post('remove/{id}', 'App\Http\Controllers\CartController@remove')->name('cart.remove');
Route::middleware(['auth:sanctum', 'verified'])->post('clear', 'App\Http\Controllers\CartController@clear')->name('cart.clear');


