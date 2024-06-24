<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\FrontController;
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

Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  //cek template admin
 Route::get('tes',function (){
     return view('layouts.admin');
 });

// route admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    route::get('/',function (){
        return view('admin.index');
    });
});
// untuk route lainnya slebew:)
Route::get('indeks',[FrontController::class,'index']);
Route::get('contact',[FrontController::class,'contact']);
Route::get('shop',[FrontController::class,'shop']);
Route::get('cart',[FrontController::class,'cart']);
Route::get('checkout',[FrontController::class,'checkout']);
Route::get('track',[FrontController::class,'track']);
Route::get('detail',[FrontController::class,'detail']);
Route::get('about',[FrontController::class,'about']);

