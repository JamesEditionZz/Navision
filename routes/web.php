<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DatalistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UpdateController;
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

Route::get('/', [Controller::class,'index'])->name('index');
Route::get('/datalist', [Controller::class,'datalist'])->name('datalist');
Route::get('/importfile', [Controller::class,'importfile'])->name('importfile');
Route::get('/Change', [Controller::class,'Change'])->name('Change');
Route::get('/Product', [Controller::class,'Product'])->name('Product');
Route::get('/Customer', [Controller::class,'Customer'])->name('Customer');
Route::get('/DC1', [Controller::class,'DC1'])->name('DC1');

//Datalist
Route::post('/DataAs', [DatalistController::class,'DataAs'])->name('DataAs');
Route::get('/Data/Product', [ProductController::class,'DataProduct'])->name('DataProduct');

//Search
Route::post('/searchItemNo', [DatalistController::class,'searchItemNo'])->name('searchItemNo');

//อัพโหลดไฟล์
Route::post('/uploadfile0', [PostController::class,'uploadfile0'])->name('uploadfile0');
Route::post('/uploadfile1', [PostController::class,'uploadfile1'])->name('uploadfile1');
Route::post('/uploadfile2', [PostController::class,'uploadfile2'])->name('uploadfile2');
Route::post('/uploadfile3', [PostController::class,'uploadfile3'])->name('uploadfile3');
Route::post('/uploadfile4', [PostController::class,'uploadfile4'])->name('uploadfile4');
Route::post('/uploadfile5', [PostController::class,'uploadfile5'])->name('uploadfile5');
Route::post('/uploadfile6', [PostController::class,'uploadfile6'])->name('uploadfile6');
Route::post('/uploadfile7', [PostController::class,'uploadfile7'])->name('uploadfile7');
Route::post('/uploadfile8', [PostController::class,'uploadfile8'])->name('uploadfile8');
Route::post('/uploadfile9', [PostController::class,'uploadfile9'])->name('uploadfile9');

//update
Route::post('/update/Category', [UpdateController::class,'updateCategory'])->name('updateCategory');