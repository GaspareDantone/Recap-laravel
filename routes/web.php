<?php


use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'] )->name('homepage');

Route::get('/contatti', [PageController::class, 'contact'])->name('contact');
Route::post('/send', [PageController::class, 'send'])->name('send');
