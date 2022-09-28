<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/', [HomeController::class, 'index'])->name('home'); 

Route::name('admin.')
->prefix('admin')
->group(function (){
    Route::get('/', [IndexController::class, 'index'])->name('index'); 
    Route::get('/test1', [IndexController::class, 'test1'])->name('test1'); 
    Route::get('/test2', [IndexController::class, 'test2'])->name('test2'); 
});

Route::name('news')
->prefix('news')
->group(function (){
    Route::get('/', [NewsController::class, 'index'])->name(''); 
    Route::get('/category/{id}', [CategoriesController::class, 'show'])->name('Category');
    Route::get('/categories', [CategoriesController::class, 'index'])->name('Categories');  
    Route::view('/add', 'newsAdd')->name('Add');
    Route::get('/{id}', [NewsController::class, 'show'])->name('One'); 
});




Route::view('/login', 'login')->name('login');

Route::view('/about', 'about')->name('about');
