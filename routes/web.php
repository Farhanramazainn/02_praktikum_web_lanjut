<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
// Route::get('/', function () {
//     echo "Selamat Datang";
//     });
// Route::get('/about', function (){
//     echo "Nim :  2141720209";
//     echo "Nama : Farhan Ramazain";
// });
// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman artikel dengan id $id";
// });
Route::get('/index',[HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
