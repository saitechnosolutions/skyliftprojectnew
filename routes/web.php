<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PHPMailerController;
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
Route::view('/','pages.home');
Route::view('product1','pages.productsl1');
Route::view('product2','pages.productsl2');
Route::view('product3','pages.productsl3');
Route::get('/mail',[PHPMailerController::class,'mail']);
