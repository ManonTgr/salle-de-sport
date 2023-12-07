<?php

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

Route::get('/',[MainController::class,'acceuil'])->name ('main.acceuil');

Route::get('/acceuil', [MainController::class, 'acceuil'])
->name('main.acceuil');

Route::get('/',[MainController::class,'cours'])->name ('main.cours');

Route::get('/cours', [MainController::class, 'cours'])
->name('main.cours');

Route::get('/',[MainController::class,'tarif'])->name ('main.tarif');

Route::get('/tarif', [MainController::class, 'tarif'])
->name('main.tarif');

Route::get('/',[MainController::class,'contact'])->name ('main.contact');

Route::get('/contact', [MainController::class, 'contact'])
->name('main.contact');

Route::get('/',[MainController::class,'mentions-legales'])->name ('main.mentions-legales');

Route::get('/mentions-legales', [MainController::class, 'mentions-legales'])
->name('main.mentions-legales');