<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;


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

Route::get('/',[HomeController::class,'index']);

Route::get('/contact',function(){
    return view('contact');
});

Route::post('index',[HomeController::class,'store'])->name('store');
Route::post('/',[HomeController::class,'index'])->name('index');

Route::get('/home',[HomeController::class,'redirect']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_stuff_view',[AdminController::class,'addview']);

Route::post('/upload',[AdminController::class,'upload']);


Route::get('/showreports',[AdminController::class,'showreports']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);


Route::get('/showstuff',[AdminController::class,'showstuff']);

Route::get('/deletestuff/{id}',[AdminController::class,'deletestuff']);

Route::get('/updatestuff/{id}',[AdminController::class,'updatestuff']);

Route::post('/editstuff/{id}',[AdminController::class,'editstuff']);








