<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});


Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/product',[PagesController::class, 'product'])->name('product');
Route::get('/ourteam',[PagesController::class, 'ourteam'])->name('ourteam');
Route::get('/aboutus',[PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus',[PagesController::class, 'contactus'])->name('contactus');