<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'showHomePage'])->name('homepage');

Route::get('/strument/show/{id}', [PublicController::class, 'showStrument'])->name('strument.show');

Route::get('/search', [PublicController::class, 'searchStrument'])->name('strument.search');

Route::get('/contact-us', [ContactController::class, 'contactPage'])->name('contactus');


