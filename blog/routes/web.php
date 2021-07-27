<?php

use Illuminate\Support\Facades\Route;
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

/* GUEST ROUTES */

/* Route::get('/', function () {
    return view('guest.welcome');
}); */

/* Pagine non connesse ad un modello */
Route::get('/', 'PageController@index')->name('home');
Route::get('about', 'PageController@about')->name('about');
Route::get('contacts', 'PageController@contacts')->name('contacts');

Route::post('contacts', 'PageController@sendContactForm')->name('contacts.send');

/* Pagine dei POST */
//Route::resource('blogs', BlogController::class)->only(['index', 'show']);
Route::get('blogs', 'BlogController@index')->name('blogs.index');
Route::get('blogs/{blog}', 'BlogController@show')->name('blogs.show');



//Auth::routes(['register' => false]); CHIUSURA DELLA REGISTRAZIONE
Auth::routes();



/* ADMIN ROUTES */
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function() {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('blogs', BlogController::class);
});