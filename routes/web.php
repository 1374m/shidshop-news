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

Route::get('/','app/Http/Controller/PagesController@index');

Route::get('/','PagesController@about');

Route::get('/service','app/Http/Controller/PagesController@service');

/*
Route::get('/about', function () {
return view('about');
});

Route::get('/users/{id}', function ($id) {
	return 'Thes is id'.$id;
});

*/



Route::get('/posts','app/Http/Controller/PostsController@service');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
