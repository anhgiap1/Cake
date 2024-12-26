<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\AuthController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\orderController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\VariantController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\categoriesController;

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
// Route::group([
//     'prefix'=> 'cates',
//     'as'=> 'cates.'
// ], function(){
//     Route::get('/',[categoriesController::class,'listcate'])->name('listcate');
//     // add
//     Route::get('addcate',[categoriesController::class,'addcate'])->name('addcate');
//     Route::post('addcate',[categoriesController::class,'addpostcate'])->name('addpostcate');
//     //edit
//     Route::get('updatecate/{id}',[categoriesController::class,'updatecate'])->name('updatecate');
//     Route::put('updatecate/{id}',[categoriesController::class,'updateputcate'])->name('updateputcate');
//     //delete
//     Route::delete('deletecate/{id}',[categoriesController::class,'deletecate'])->name('deletecate');
// });
// //sanpham
// a111
// Route::group([
//     'prefix'=>'pros',
//     'as'=>'pros.'
// ], function(){
//     Route::get('/',[ProductController::class,'listpro'])->name('listpro');
//     //add
//     Route::get('addpro',[ProductController::class,'addpro'])->name('addpro');
//     Route::post('addpro',[ProductController::class,'addpostpro'])->name('addpostpro');
//     //update
//     Route::get('updatepro/{id}',[ProductController::class,'updatepro'])->name('updatepro');
//     Route::put('updatepro/{id}',[ProductController::class,'updateputpro'])->name('updateputpro');
//     //delete
//     Route::delete('deletepro/{id}',[ProductController::class,'deletepro'])->name('deletepro');
// });

//bienthe

// Route::group([
//     'prefix'=>'vars',
//     'as'=>'vars.'
// ],function(){
//     Route::get('/',[VariantController::class,'listvar'])->name('listvar');
//     //add
//     Route::get('addvar',[VariantController::class,'addvar'])->name('addvar');
//     Route::post('addvar',[VariantController::class,'addpostvar'])->name('addpostvar');
//     //update
//     Route::get('updatevar/{id}',[VariantController::class,'updatevar'])->name('updatevar');
//     Route::put('updatevar/{id}',[VariantController::class,'updateputvar'])->name('updateputvar');
//     //delete
//     Route::delete('deletevar/{id}',[VariantController::class,'deletevar'])->name('deletevar');
    
// });
Route::get('dashboard/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('admin');
//
// user

Route::get('user/index', [UserController::class, 'index'])->name('user.index')->middleware('admin');
Route::get('user/create', [UserController::class, 'create'])->name('user.create')->middleware('admin');
Route::post('user/store', [UserController::class,'store'])->name('user.store')->middleware('admin');
// Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware('admin');
// Route::put('user/update/{id}', [UserController::class,'update'])->name('user.update')->middleware('admin');
Route::delete('user/destroy/{id}', [UserController::class,'destroy'])->name('user.destroy')->middleware('admin');
Route::get('user/searchOders', [UserController::class, 'searchUser'])->name('user.searchUser')->middleware('admin');
// category
Route::get('category/index', [categoriesController::class, 'index'])->name('category.index')->middleware('admin');
Route::get('category/create', [categoriesController::class, 'create'])->name('category.create')->middleware('admin');
Route::post('category/store', [categoriesController::class,'store'])->name('category.store')->middleware('admin');
Route::get('category/edit/{id}', [categoriesController::class, 'edit'])->name('category.edit')->middleware('admin');
Route::put('category/update/{id}', [categoriesController::class,'update'])->name('category.update')->middleware('admin');
Route::delete('category/destroy/{id}', [categoriesController::class,'destroy'])->name('category.destroy')->middleware('admin');
// variants
Route::get('variant/index', [VariantController::class, 'index'])->name('variant.index')->middleware('admin');
Route::get('variant/create', [variantController::class, 'create'])->name('variant.create')->middleware('admin');
Route::post('variant/store', [variantController::class,'store'])->name('variant.store')->middleware('admin');
Route::get('variant/edit/{id}', [variantController::class, 'edit'])->name('variant.edit')->middleware('admin');
Route::put('variant/update/{id}', [variantController::class,'update'])->name('variant.update')->middleware('admin');
Route::delete('variant/destroy/{id}', [variantController::class,'destroy'])->name('variant.destroy')->middleware('admin');
// order
Route::get('oder/index', [orderController::class, 'index'])->name('order.index')->middleware('admin');
Route::put('oder/update/{id}', [orderController::class,'update'])->name('order.update')->middleware('admin');
Route::get('oder/show/{id}', [orderController::class,'show'])->name('order.show')->middleware('admin');
Route::get('oder/searchOders', [orderController::class, 'searchOders'])->name('order.searchOders')->middleware('admin');
//orderFiller

//products
Route::get('product/index', [ProductController::class, 'index'])->name('product.index')->middleware('admin');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create')->middleware('admin');
Route::post('product/store', [ProductController::class,'store'])->name('product.store')->middleware('admin');
Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit')->middleware('admin');
Route::put('product/update/{id}', [ProductController::class,'update'])->name('product.update')->middleware('admin');
Route::delete('product/destroy/{id}', [ProductController::class,'destroy'])->name('product.destroy')->middleware('admin');
//
Route::get('admin', [AuthController::class, 'index'])->name('admin.admin');
Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::post('login', [AuthController::class, 'login'])->name('admin.login');
Route::post('register', [AuthController::class,'register'])->name('admin.register');

