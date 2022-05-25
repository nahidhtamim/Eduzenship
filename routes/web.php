<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
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
Route::get('/home',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/mission-vision',[HomeController::class, 'mission_vision']);
Route::get('/goals',[HomeController::class, 'goals']);
Route::get('/our-services',[HomeController::class, 'our_services']);
Route::get('/our-offerings',[HomeController::class, 'our_offerings']);
Route::get('/blogs',[HomeController::class, 'blogs']);
Route::get('/blog-details/{slug}',[HomeController::class, 'blog_details']);
Route::get('/events',[HomeController::class, 'events']);
Route::get('/countries',[HomeController::class, 'countries']);
Route::get('/contact',[ContactController::class, 'contact']);
Route::post('/send-email',[ContactController::class, 'contactMail'])->name('contact.send');

Auth::routes();
Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard',[AdminController::class, 'dashboard']);
    Route::get('/view-images',[AdminController::class, 'viewImage']);
    Route::post('/upload-image',[AdminController::class, 'uploadImages']);
    Route::get('/edit-image/{id}',[AdminController::class, 'editImage']);
    Route::put('/update-image/{id}',[AdminController::class, 'updateImage']);
 
    Route::get('/view-blogs',[BlogController::class, 'index']);
    Route::post('/save-blog',[BlogController::class, 'saveBlog']);
    Route::get('/edit-blog/{slug}',[BlogController::class, 'editBlog']);
    Route::post('/update-blog/{slug}',[BlogController::class, 'updateBlog']);
    Route::get('/active-blog/{slug}',[BlogController::class, 'activeBlog']);
    Route::get('/deactive-blog/{slug}',[BlogController::class, 'deactiveBlog']);
    Route::get('/delete-blog/{slug}',[BlogController::class, 'deleteBlog']);

    Route::get('/view-events',[EventController::class, 'index']);
    Route::post('/save-event',[EventController::class, 'saveEvent']);
    Route::get('/edit-event/{slug}',[EventController::class, 'editEvent']);
    Route::post('/update-event/{slug}',[EventController::class, 'updateEvent']);
    Route::get('/active-event/{slug}',[EventController::class, 'activeEvent']);
    Route::get('/deactive-event/{slug}',[EventController::class, 'deactiveEvent']);
    Route::get('/delete-event/{slug}',[EventController::class, 'deleteEvent']);
 });




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
