<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home',[HomeController::class,'redirect']);
Route::get('/allproduct',[HomeController::class,'allproduct']);
Route::get('/male_style',[HomeController::class,'malestyle']);
Route::get('/female_style',[HomeController::class,'femalestyle']);

Route::get('/viewcategory',[AdminController::class,'view_category']);
Route::post('/addcategory',[AdminController::class,'add_category']);
Route::get('/deletecategory/{id}',[AdminController::class,'delete_category']);
Route::get('/tampilproduct',[AdminController::class,'tampilproduct']);
Route::get('/addproduct',[AdminController::class,'add_product']);
Route::post('/addlogicproduct',[AdminController::class,'addlogicproduct']);
Route::get('/editproduct/{id}',[AdminController::class,'edit_product']);
Route::post('/editlogicproduct/{id}',[AdminController::class,'editlogicproduct']);
Route::get('/deleteproduct/{id}',[AdminController::class,'delete_product']);
Route::get('/order',[AdminController::class,'order']);

Route::get('/productdetail/{id}',[HomeController::class,'product_detail']);
Route::get('/showcart',[HomeController::class,'showcart']);
Route::post('/addcart/{id}',[HomeController::class,'addcart']);
Route::get('/hapuscart/{id}',[HomeController::class,'hapuscart']);
Route::get('/ordercash',[HomeController::class,'ordercash']);
Route::get('/showorder',[HomeController::class,'showorder']);
Route::get('/cancelorder/{id}',[HomeController::class,'cancelorder']);
Route::get('/deleteorder/{id}',[HomeController::class,'deleteorder']);
Route::get('/contact',[HomeController::class,'contact']);
