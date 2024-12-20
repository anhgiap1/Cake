<?php

use App\Http\Controllers\adm\categoriesController;
use App\Http\Controllers\adm\ProductController;
use App\Models\categories;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\AuthController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\orderController;
use App\Http\Controllers\backend\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//categories
Route::group([
    'prefix'=> 'cates',
    'as'=> 'cates.'
], function(){
    Route::get('/',[categoriesController::class,'listcate'])->name('listcate');
    // add
    Route::get('addcate',[categoriesController::class,'addcate'])->name('addcate');
    Route::post('addcate',[categoriesController::class,'addpostcate'])->name('addpostcate');
    //edit
    Route::get('updatecate/{id}',[categoriesController::class,'updatecate'])->name('updatecate');
    Route::put('updatecate/{id}',[categoriesController::class,'updateputcate'])->name('updateputcate');
    //delete
    Route::delete('deletecate/{id}',[categoriesController::class,'deletecate'])->name('deletecate');
});
//sanpham

Route::group([
    'prefix'=>'pros',
    'as'=>'pros.'
], function(){
    Route::get('/',[ProductController::class,'listpro'])->name('listpro');
    //add
    Route::get('addpro',[ProductController::class,'addpro'])->name('addpro');
    Route::post('addpro',[ProductController::class,'addpostpro'])->name('addpostpro');
    //update
    Route::get('updatepro/{id}',[ProductController::class,'updatepro'])->name('updatepro');
    Route::put('updatepro/{id}',[ProductController::class,'updateputpro'])->name('updateputpro');
    //delete
    Route::delete('deletepro/{id}',[ProductController::class,'deletepro'])->name('deletepro');
});
Route::get('dashboard/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('admin');
//
// user

Route::get('user/index', [UserController::class, 'index'])->name('user.index')->middleware('admin');
Route::get('user/create', [UserController::class, 'create'])->name('user.create')->middleware('admin');
Route::post('user/store', [UserController::class,'store'])->name('user.store')->middleware('admin');
// Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware('admin');
// Route::put('user/update/{id}', [UserController::class,'update'])->name('user.update')->middleware('admin');
Route::delete('user/destroy/{id}', [UserController::class,'destroy'])->name('user.destroy')->middleware('admin');
//
// order
Route::get('oder/index', [orderController::class, 'index'])->name('order.index')->middleware('admin');
Route::put('oder/update/{id}', [orderController::class,'update'])->name('order.update')->middleware('admin');
Route::get('oder/show/{id}', [orderController::class,'show'])->name('order.show')->middleware('admin');
//
Route::get('admin', [AuthController::class, 'index'])->name('admin.admin');
Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::post('login', [AuthController::class, 'login'])->name('admin.login');
Route::post('register', [AuthController::class,'register'])->name('admin.register');

