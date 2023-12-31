<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminHomeController;


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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/admin', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login1', 'LoginController@show')->name('login.show');
        Route::post('/login1', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

Route::get('/', [HomeController::class, 'indexuser'])->name('home');
Route::get('/destination1/{id}', [HomeController::class, 'destination1'])->name('destination1');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('destinatioDetails/{id}', [HomeController::class, 'destinatioDetails'])->name('destinatioDetails');
Route::POST('review', [HomeController::class, 'review'])->name('review');
Route::POST('booking', [HomeController::class, 'booking'])->name('booking');




Route::prefix('admin')->group(function () {
    Route::get('/dashbord', [AdminHomeController::class, 'index'])->name('admin_home');
    Route::get('/createnewtour', [AdminHomeController::class, 'createNew'])->name('createnewtour');
    Route::POST('/createtour', [AdminHomeController::class, 'create'])->name('admin_create');
    Route::POST('/upload', [AdminHomeController::class, 'upload'])->name('ckeditor.upload');
});