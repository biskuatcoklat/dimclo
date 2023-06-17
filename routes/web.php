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
Route::get('/viewcategory',[AdminController::class,'view_category']);
Route::post('/addcategory',[AdminController::class,'add_category']);
Route::get('/deletecategory/{id}',[AdminController::class,'delete_category']);
Route::get('/tampilproduct',[AdminController::class,'tampilproduct']);
Route::get('/addproduct',[AdminController::class,'add_product']);
Route::post('/addlogicproduct',[AdminController::class,'addlogicproduct']);
Route::get('/editproduct/{id}',[AdminController::class,'edit_product']);
Route::post('/editlogicproduct',[AdminController::class,'editlogicproduct']);
Route::get('/deleteproduct/{id}',[AdminController::class,'delete_product']);
