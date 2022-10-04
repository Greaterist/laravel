<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\News\CategoriesController;
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
    Route::match(['get', 'post'], '/createNews', [IndexController::class, 'createNews'])->name('createNews'); 
    Route::get('/test1', [IndexController::class, 'test1'])->name('test1'); 
    Route::get('/test2', [IndexController::class, 'test2'])->name('test2'); 
});

Route::name('news.')
->prefix('news')
->group(function (){
    Route::get('/', [NewsController::class, 'index'])->name('index'); 
    Route::get('/category/{id}', [CategoriesController::class, 'show'])->name('category');
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');  
    Route::view('/add', 'News.add')->name('add');
    Route::get('/{id}', [NewsController::class, 'show'])->name('one'); 
});

Route::get('/save', [HomeController::class, 'save'])->name('save');


Route::view('/login', 'login')->name('login');

Route::view('/about', 'about')->name('about');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
