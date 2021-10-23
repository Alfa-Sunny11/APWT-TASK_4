<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EmoloyeeMiddleware;
use Illuminate\Support\Facades\DB;

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

Route::get('/',[ProductController::class, 'index'])->name('home');
Route::get('/product/create',[ProductController::class, 'create'])->middleware('EmployeeMiddleware')->name('create');
Route::post('/product/create',[ProductController::class, 'getdata'])->name('create');
Route::get('/product/details',[ProductController::class, 'getdetails'])->name('details');
Route::get('/product/list',[ProductController::class, 'list'])->name('list');
Route::get('/product/edit/{id}/{name}',[ProductController::class, 'edit']);
Route::post('/product/edit',[ProductController::class, 'editSubmit'])->name('edit');
Route::get('/product/delete/{id}/{name}',[ProductController::class,'delete']);
//employee
Route::get('/employee/add',[EmployeeController::class, 'getReg'])->name("employee.add");
Route::post('/employee/add',[EmployeeController::class, 'reg'])->name('employee.add');

//user
Route::get('/user/registration',[UserController::class, 'userReg'])->name('user.reg');
Route::post('/user/registration',[UserController::class, 'getUser'])->name('user.reg');

//cart
Route::get('/cart',[CartController::class, 'getCart'])->name('cart');

//order
Route::get('/order',[ProductController::class, 'getOrder'])->name("user.order");

//login
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
//logout
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

///
Route::get('/addtocart/{id}',[ProductController::class,'addtocart'])->name('products.addtocart');
Route::get('/emptycart',[ProductController::class,'emptycart'])->name('products.emptycart');
Route::get('/cart',[ProductController::class,'mycart'])->name('products.mycart');
Route::post('/checkout',[ProductController::class,'checkout'])->name('checkout');
/**product routes end */
       
Route::get('/customer/myorders',[CustomerController::class,'myorders'])
->name('customer.myorders');
