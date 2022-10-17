<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PricingController;

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

Route::get('/', function () {   return view('home'); });
Route::get('/about', function () {   return view('about'); });
Route::get('/product', function () {   return view('products'); });
Route::get('/contact', function () {   return view('contacts'); });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('pricing', [ PricingController::class, 'index'])->middleware('auth');

require __DIR__.'/auth.php';
