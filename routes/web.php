<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/contact',[ContactController::class,'show'])->name('contact.show');
Route::post('/contact',[ContactController::class,'send'])->name('contact.send');
Route::get('/download-cv', [ContactController::class, 'downloadCV'])->name('download.cv');
