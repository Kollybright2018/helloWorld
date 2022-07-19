<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
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

// Route::get('/service', function () {
//     return view('service');
//     // return "Hello Laravel";
// }); 

Route::get('/', function () {
    return view('welcome');
    // return "Hello Laravel";
}); 
// Route::get('/about', [PagesController@about])

Route::get('/service', [PagesController::class, 'service']);
Route::get('/form', [PagesController::class, 'form']);
Route::get('/home', [PagesController::class, 'home'])->name('myhome');
Route::get('/about/{name}', [PagesController::class, 'about']);
Route::put('my-first', [PagesController::class, 'myform'])->name('my-first');
// Route::get('/home', 'PagesController@home');
// Route::get('/', function(){
//     return view('pages.index');
// // return 'hello oo' .$name ."Are you sure its this ".$id;
// });
Route::get('/', 'PagesController@index')->name('home');
Route::get('/show/{id}', [PagesController::class, 'show']);
Route::get('/create', [ProductController::class, 'create']);
Route::post('/saveproduct', [ProductController::class, 'saveproduct'])->name('saveproduct');
Route::get('/editproduct/{id}', [ProductController::class, "editproduct"]);
Route::post('/update', [ProductController::class, 'updateproduct']);
Route::get('/delete/{id}', [ProductController::class, 'deleteproduct']);
Route::get('/category', [CategoryController::class, 'category'])->name('create');
Route::get('/index', [CategoryController::class, 'index'])->name('index');
Route::get('/editcart', [CategoryController::class, 'edit'])->name('editcart');
Route::resource('/category', 'CategoryController');
