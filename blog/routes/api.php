<?php

use App\Blog;
use App\Http\Resources\BlogResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Senza controller con la closure
/* Route::get('blogs', function () {
    $blogs = Blog::all();
    return response()->json([
        'status_code' => 500,
        'response' => $blogs
    ]);
}); */


//Non costumizzabile (Scorciatoia)
/* Route::get('blogs', function () {
    $blogs = Blog::all();
    return $blogs;
}); */


//Scorciatoia con paginazione
/* Route::get('blogs', function () {
    $blogs = Blog::paginate(5);
    return $blogs;
}); */


//Scorciatoia con le relazioni ma senza paginazione
/* Route::get('blogs', function () {
    $blogs = Blog::with(['category'])->get();
    return $blogs;
}); */


// RELAZIONI + PAGINAZIONE
/* Route::get('blogs', function () {
    $blogs = Blog::with(['category'])->paginate();
    return $blogs;
}); */

Route::get('blogs', 'API\BlogController@index');

// API Resource Singolo
Route::get('blogs/{blog}', function (Blog $blog) {
    return new BlogResource($blog);
});

