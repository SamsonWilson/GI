<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|n

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// les route des Admins
// Route::get('/Admin', [App\Http\Controllers\Admin::class, 'index'])->name('Admin');
// Auth::routes();

Route::get('/admin', [App\Http\Controllers\Admin::class, 'index'])->name('admin');
Route::get('/sadmin', [App\Http\Controllers\Sadmin::class, 'index'])->name('sadmin');
Route::get('/ajouter', [App\Http\Controllers\ajouter::class, 'index'])->name('ajouter');
Route::post('/ajouterville', [App\Http\Controllers\Sadmin::class, 'store'])->name('ajouterville');
Route::get('/ville={id}', [App\Http\Controllers\Sadmin::class, 'edit'])->name ('edit_ville');
Route::put('/update_ville/{id}', [App\Http\Controllers\Sadmin::class, 'update'])->name ('update_ville');
Route::delete('/delete/{ville}', [App\Http\Controllers\Sadmin::class, 'destroy'])->name ('delete_ville');