<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TRController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('',[HomeController::class,'home'])->name('home');
Route::get('contact',[ContactController::class, 'contact'])->name('contact');
Route::get('TR',[TRController::class,'TR'])->name('TR');
Route::get('FAQ',[FAQController::class,'FAQ'])->name('FAQ');
Route::get('cart',[CartController::class,'cart'])->name('cart');
Route::get('checkout',[CheckController::class,'checkout'])->name('checkout');
Route::get('showCategory',[CategoryController::class,'showCategory'])->name('showCategory');
Route::get('showProduct',[ProductController::class,'showProduct'])->name('showProduct');
Route::get('login',[UserController::class,'login'])->name('login');
Route::get('register',[UserController::class,'register'])->name('register');

Route::group(['prefix' => 'admin'], function (){
    Route::get('index',[AdminController::class, 'adminIndex'])->name('adminIndex');
    Route::get('visitUser',[AdminController::class, 'adminVisitUser'])->name('adminVisitUser');
    Route::get('addUser',[AdminController::class, 'adminAddUser'])->name('adminAddUser');
    Route::get('updateUser/{id}',[AdminController::class, 'adminUpdateUser'])->name('adminUpdateUser');
    Route::post('addUser',[AdminController::class, 'adminPostAddUser'])->name('adminPostAddUser');
    Route::post('updateUser/{id}',[AdminController::class, 'adminPostUpdateUser'])->name('adminPostUpdateUser');
//role & permission
    Route::get('visitPermission',[AdminController::class, 'adminVisitPermission'])->name('adminVisitPermission');
    Route::get('addPermission',[AdminController::class, 'adminAddPermission'])->name('adminAddPermission');
    Route::get('updatePermission/{id}',[AdminController::class, 'adminUpdatePermission'])->name('adminUpdatePermission');
    Route::get('visitRole',[AdminController::class, 'adminVisitRole'])->name('adminVisitRole');
    Route::get('addRole',[AdminController::class, 'adminAddRole'])->name('adminAddRole');
    Route::get('updateRole/{id}',[AdminController::class, 'adminUpdateRole'])->name('adminUpdateRole');
    Route::post('addPermission',[AdminController::class, 'adminPostAddPermission'])->name('adminPostAddPermission');
    Route::post('updatePermission/{id}',[AdminController::class, 'adminPostUpdatePermission'])->name('adminPostUpdatePermission');
    Route::get('deletePermission/{id}',[AdminController::class, 'adminDeletePermission'])->name('adminDeletePermission');
    Route::post('addRole',[AdminController::class, 'adminPostAddRole'])->name('adminPostAddRole');
    Route::post('updateRole/{id}',[AdminController::class, 'adminPostUpdateRole'])->name('adminPostUpdateRole');
    Route::get('deleteRole/{id}',[AdminController::class, 'adminDeleteRole'])->name('adminDeleteRole');
//category
    Route::get('visitCategory',[AdminController::class, 'adminVisitCategory'])->name('adminVisitCategory');
    Route::get('addCategory',[AdminController::class, 'adminAddCategory'])->name('adminAddCategory');
    Route::get('addParentCategory/{id}',[AdminController::class, 'adminAddParentCategory'])->name('adminAddParentCategory');
    Route::get('updateCategory/{id}',[AdminController::class, 'adminUpdateCategory'])->name('adminUpdateCategory');
    Route::post('addCategory',[AdminController::class, 'adminPostAddCategory'])->name('adminPostAddCategory');
    Route::post('addParentCategory/{id}',[AdminController::class, 'adminPostAddParentCategory'])->name('adminPostAddParentCategory');
    Route::post('updateCategory/{id}', [AdminController::class, 'adminPostUpdateCategory'])->name('adminPostUpdateCategory');
//tag
    Route::get('visitTag',[AdminController::class, 'adminVisitTag'])->name('adminVisitTag');
    Route::get('addTag',[AdminController::class, 'adminAddTag'])->name('adminAddTag');
    Route::get('updateTag/{id}',[AdminController::class, 'adminUpdateTag'])->name('adminUpdateTag');
    Route::post('addTag', [AdminController::class, 'adminPostAddTag'])->name('adminPostAddTag');
    Route::post('updateTag/{id}',[AdminController::class, 'adminPostUpdateTag'])->name('adminPostUpdateTag');
//discount
    Route::get('visitDiscount',[AdminController::class, 'adminVisitDiscount'])->name('adminVisitDiscount');
    Route::get('addDiscount',[AdminController::class, 'adminAddDiscount'])->name('adminAddDiscount');
    Route::get('updateDiscount/{id}',[AdminController::class, 'adminUpdateDiscount'])->name('adminUpdateDiscount');
    Route::post('addDiscount', [AdminController::class, 'AdminPostAddDiscount'])->name('adminPostAddDiscount');
    Route::post('updateDiscount/{id}', [AdminController::class, 'adminPostUpdateDiscount'])->name('adminPostUpdateDiscount');
//product
    Route::get('visitProduct', [AdminController::class, 'adminVisitProduct'])->name('adminVisitProduct');
    Route::get('addProduct', [AdminController::class, 'adminAddProduct'])->name('adminAddProduct');
    Route::get('updateProduct/{id}', [AdminController::class, 'adminUpdateProduct'])->name('adminUpdateProduct');
    Route::post('addProduct',[AdminController::class, 'adminPostAddProduct'])->name('adminPostAddProduct');
    Route::post('updateProduct/{id}',[AdminController::class, 'adminPostUpdateProduct'])->name('adminPostUpdateProduct');
    Route::get('deleteProductImage/{id}',[AdminController::class, 'adminDeleteProductImage'])->name('adminDeleteProductImage');
//comment
    Route::get('visitComment', [AdminController::class, 'adminVisitComment'])->name('adminVisitComment');
    Route::get('updateComment/{id}', [AdminController::class, 'adminUpdateComment'])->name('adminUpdateComment');
    Route::post('updateComment/{id}',[AdminController::class, 'adminPostUpdateComment'])->name('adminPostUpdateComment');
//region & city & zone
    Route::get('visitRegion',[AdminController::class, 'adminVisitRegion'])->name('adminVisitRegion');
    Route::get('addRegion',[AdminController::class, 'adminAddRegion'])->name('adminAddRegion');
    Route::get('updateRegion/{id}',[AdminController::class, 'adminUpdateRegion'])->name('adminUpdateRegion');
    Route::get('visitCity',[AdminController::class, 'adminVisitCity'])->name('adminVisitCity');
    Route::get('addCity/{id}',[AdminController::class, 'adminAddCity'])->name('adminAddCity');
    Route::get('updateCity/{id}',[AdminController::class, 'adminUpdateCity'])->name('adminUpdateCity');
    Route::post('addRegion',[AdminController::class, 'adminPostAddRegion'])->name('adminPostAddRegion');
    Route::post('updateRegion/{id}',[AdminController::class, 'adminPostUpdateRegion'])->name('adminPostUpdateRegion');
    Route::post('addCity/{id}',[AdminController::class,'adminPostAddCity'])->name('adminPostAddCity');
    Route::post('updateCity/{id}',[AdminController::class,'adminPostUpdateCity'])->name('adminPostUpdateCity');
//address
    Route::get('visitAddress',[AdminController::class, 'adminVisitAddress'])->name('adminVisitAddress');
    Route::get('deleteAddress/{id}',[AdminController::class,'adminDeleteAddress'])->name('adminDeleteAddress');
//order
    Route::get('visitOrder',[AdminController::class, 'adminVisitOrder'])->name('adminVisitOrder');
//transaction
    Route::get('visitTransaction', [AdminController::class, 'adminVisitTransaction'])->name('adminVisitTransaction');
//contact
    Route::get('visitContact', [AdminController::class, 'adminVisitContact'])->name('adminVisitContact');
});
