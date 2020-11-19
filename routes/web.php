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
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

Route::get('/',[PagesController::class , 'index']);

Route::get('/about',[PagesController::class, 'about']);

Route::get('/service', [PagesController::class,'service']);
Route::get('/test', [PostsController::class,'test']);
// Route::resource('/posts-2', PostsController::class);
/*
Route::get('/about', function () {
return view('about');
});

Route::get('/users/{id}', function ($id) {
	return 'Thes is id'.$id;
});

*/



Route::get('/posts',[PostsController::class, 'service']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
