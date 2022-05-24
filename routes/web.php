<?php

use App\Http\Controllers\MobileController;
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