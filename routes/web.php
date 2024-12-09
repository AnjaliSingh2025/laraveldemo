<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\ProductController;
use App\Http\Controllers\registrationcontroller;
  
Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', [ProductController::class,'addUsers']);
Route::get('/register',[registrationcontroller::class,'register'])->name('register');
Route::get('/users',[registrationcontroller::class,'usersview'])->name('users');
Route::get('/users/delete/{id?}',[registrationcontroller::class,'delete'])->name('users.delete');
Route::get('/users/edit/{id?}',[registrationcontroller::class,'update'])->name('users.edit');
Route::post('/registeruser',[registrationcontroller::class,'registeruser'])->name('registeruser');
Route::get('/login',[registrationcontroller::class,'login'])->name('login');

Route::resource('products', ProductController::class);