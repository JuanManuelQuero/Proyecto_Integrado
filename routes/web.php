<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MobileController;
use App\Http\Livewire\IndexMobiles;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Oath\GitHubController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Ruta para el CRUD de móviles
Route::middleware(['auth:sanctum', 'verified'])->middleware('can:mobiles.crud')
->get('crudmobiles', IndexMobiles::class)->name('mobiles.crud');

//Ruta para mostrar la vista de la tienda de móviles
Route::middleware(['auth:sanctum', 'verified'])->resource('mobiles', MobileController::class);

//Rutas para el login con GitHub
Route::get('auth/github/redirect', [GitHubController::class, 'redirect'])->name('github.redirect');
Route::get('auth/github/callback', [GitHubController::class, 'callback'])->name('github.callback');

//Rutas para mostrar y enviar el fomulario de contacto
Route::middleware(['auth:sanctum', 'verified'])
->get('contacto', "App\Http\Controllers\ContactoController@index")->name('contacto.index');
Route::middleware(['auth:sanctum', 'verified'])
->post('contacto', "App\Http\Controllers\ContactoController@enviar")->name('contacto.enviar');

//Ruta para los comentarios
Route::middleware(['auth:sanctum', 'verified'])
->post('/mobiles/{mobile}/comments', 'App\Http\Controllers\CommentController@create')->name('comments.create');


//Rutas para el carrito
Route::middleware(['auth:sanctum', 'verified'])->resource('cart', CartController::class);
Route::middleware(['auth:sanctum', 'verified'])->post('mobiles/{mobile}', 'App\Http\Controllers\MobileController@addCart')->name('mobiles.addCart');
Route::middleware(['auth:sanctum', 'verified'])->post('remove/{id}', 'App\Http\Controllers\CartController@remove')->name('cart.remove');
Route::middleware(['auth:sanctum', 'verified'])->post('clear', 'App\Http\Controllers\CartController@clear')->name('cart.clear');
Route::middleware(['auth:sanctum', 'verified'])->post('moreQuantity/{id}', 'App\Http\Controllers\CartController@moreQuantity')->name('cart.moreQuantity');
Route::middleware(['auth:sanctum', 'verified'])->post('lessQuantity/{id}', 'App\Http\Controllers\CartController@lessQuantity')->name('cart.lessQuantity');
Route::middleware(['auth:sanctum', 'verified'])->post('vender', 'App\Http\Controllers\CartController@vender')->name('cart.vender');