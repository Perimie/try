<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
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


Route::get('/home',[home::class,'index']);
Route::get('back', [home::class,'back']);
Route::post('/add_product', [home:: class,'add_product']);  
Route::get('show_product' , [home::class,'show_product']);
Route::get('delete_product/{id}',[home::class,'delete_product']);
Route::get('update_product/{id}',[home::class,'update_product']);
Route::post('edit_product/{id}', [home::class,'edit_product']);

