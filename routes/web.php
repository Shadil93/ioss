<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::POST('/do_register',[HomeController::class,'do_register'])->name('do_register');

Route::get('/login',[HomeController::class,'login'])->name('login');
Route::POST('/do_login',[HomeController::class,'do_login'])->name('do_login');
Route::get('/mai',[HomeController::class,'mai'])->name('mai');

Route::get('logout',[HomeController::class,'logout'])->name('logout');

Route::get('/adminlogin',[HomeController::class,'adminlogin'])->name('adminlogin');
Route::POST('/do_adminlogin',[HomeController::class,'do_adminlogin'])->name('do_adminlogin');


Route::get('/admin',[HomeController::class,'admin'])->name('admin');
Route::get('/adminlogout',[HomeController::class,'adminlogout'])->name('adminlogout');

Route::get('/todoap',[TaskController::class,'todoap'])->name('todoap');
Route::POST('/do_todoap',[TaskController::class,'do_todoap'])->name('do_todoap');
Route::get('/view',[TaskController::class,'view'])->name('view');

Route::GET('/search',[TaskController::class,'search'])->name('search');
Route::POST('/do_search',[TaskController::class,'do_search'])->name('do_search');

Route::POST('/update/{todoa_id}',[TaskController::class,'update'])->name('update');
Route::get('/edit/{todoa_id}',[TaskController::class,'edit'])->name('edit');
Route::get('/delete/{todoa_id}',[TaskController::class,'delete'])->name('delete');


Route::get('/title',[TaskController::class,'title'])->name('title');
Route::get('/created_at',[TaskController::class,'created_at'])->name('created_at');

