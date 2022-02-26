<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/mission-vision',[HomeController::class, 'mission_vision']);
Route::get('/goals',[HomeController::class, 'goals']);
Route::get('/our-services',[HomeController::class, 'our_services']);
Route::get('/countries',[HomeController::class, 'countries']);
Route::get('/contact',[ContactController::class, 'contact']);
Route::post('/send-email',[ContactController::class, 'contactMail'])->name('contact.send');
