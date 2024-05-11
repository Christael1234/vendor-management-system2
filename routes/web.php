<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddressController;







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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('dashboard.home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/adP', [App\Http\Controllers\HomeController::class, 'adP'])->name('adP.show');

Route::get('/allP', [App\Http\Controllers\HomeController::class, 'allP'])->name('allP.show');



Route::get('/adU', [App\Http\Controllers\HomeController::class, 'adU'])->name('adU.show');

Route::get('/allU', [App\Http\Controllers\HomeController::class, 'allU'])->name('allU.show');

Route::get('/allB', [App\Http\Controllers\HomeController::class, 'allB'])->name('allB.show');

Route::get('/adB', [App\Http\Controllers\HomeController::class, 'adB'])->name('adB.show');

Route::get('/allC', [App\Http\Controllers\HomeController::class, 'allC'])->name('allC.show');

Route::get('/adC', [App\Http\Controllers\HomeController::class, 'addC'])->name('addC.show');

Route::get('/adA', [App\Http\Controllers\HomeController::class, 'addA'])->name('addAddress.show');

Route::get('/alA', [App\Http\Controllers\HomeController::class, 'allA'])->name('allAddresses.show');


//product routes

Route::get('/addP', [ProductController::class, 'create'])->name('product.create');

Route::post('/createProduct', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');


Route::get('/product/{product}/details', [App\Http\Controllers\ProductController::class, 'details'])->name('product.details');


Route::put('/product/{product}/update', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');

Route::delete('/product/{product}/delete', [App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');



//unit routes

Route::get('/addU', [App\Http\Controllers\UnitController::class, 'createU'])->name('unit.create');


Route::post('/addU', [App\Http\Controllers\UnitController::class, 'storeU'])->name('unit.store');

Route::get('/unit/{unit}/edit', [App\Http\Controllers\UnitController::class, 'edit'])->name('unit.edit');

Route::put('/unit/{unit}/update', [App\Http\Controllers\UnitController::class, 'update'])->name('unit.update');

Route::delete('/unit/{unit}/delete', [App\Http\Controllers\UnitController::class, 'delete'])->name('unit.delete');


//brand routes

Route::get('/addB', [App\Http\Controllers\BrandController::class, 'createB'])->name('brand.create');

Route::post('/homes', [App\Http\Controllers\BrandController::class, 'storeB'])->name('brand.store');


Route::get('brand/{brand}/edit', [App\Http\Controllers\BrandController::class, 'edit'])->name('brand.edit');

Route::put('brand/{brand}/update', [App\Http\Controllers\BrandController::class, 'update'])->name('brand.update');

Route::delete('/home/{brand}/delete', [App\Http\Controllers\BrandController::class, 'delete'])->name('brand.delete');


//category routes 

Route::get('/addC', [App\Http\Controllers\CategoryController::class, 'createCategory'])->name('category.create');

Route::post('/homeC', [App\Http\Controllers\CategoryController::class, 'storeCategory'])->name('category.store');

Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');

Route::put('/category/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');

Route::delete('/category/{category}/delete', [App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete');

//address routes

Route::get('/addA', [App\Http\Controllers\AddressController::class, 'create'])->name('address.create');

Route::post('/home', [App\Http\Controllers\AddressController::class, 'store'])->name('address.store');

Route::get('/address/{address}/edit', [App\Http\Controllers\AddressController::class, 'editA'])->name('address.edit');

Route::put('/address/{address}/update', [App\Http\Controllers\AddressController::class, 'update'])->name('address.update');

Route::delete('/address/{address}/delete', [App\Http\Controllers\AddressController::class, 'delete'])->name('address.delete');

















