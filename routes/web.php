<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');
Route::get('/paslaugos', [PagesController::class, 'paslaugos'])->name('paslaugos');
Route::get('/dviraciai', [PagesController::class, 'dviraciai'])->name('dviraciai');
Route::get('/automobiliai', [PagesController::class, 'automobiliai'])->name('automobiliai');
Route::get('/lektuvai', [PagesController::class, 'lektuvai'])->name('lektuvai');
Route::get('/autobusai', [PagesController::class, 'autobusai'])->name('autobusai');
Route::get('/atsilepimai', [PagesController::class, 'atsilepimai'])->name('atsilepimai');
Route::get('/naujas_atsilepimas', [PagesController::class, 'naujas_atsilepimas'])->name('naujas_atsilepimas');


Route::get('/form', function () {
    return view('naujas-atsilepimas');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
