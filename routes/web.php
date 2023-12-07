<?php

use App\Http\Controllers\MainController;
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

Route::get('/',[MainController::class,'AcceuilController'])->name ('main.acceuil');


Route::get('/cours',[MainController::class,'CoursController'])->name ('main.cours');


Route::get('/tarif',[MainController::class,'Tarifscontroller'])->name ('main.tarif');


Route::get('/contact',[MainController::class,'ContactController'])->name ('main.contact');

Route::get('/mentions-legales',[MainController::class,'mentions-legales'])->name ('main.mentions-legales');
