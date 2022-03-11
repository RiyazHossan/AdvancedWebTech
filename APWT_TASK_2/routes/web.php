<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;
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
    return view('login.login');
});


Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/ourTeam', [PageController::class, 'ourTeam'])->name('ourTeam');
Route::get('/aboutUs', [PageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactUs', [PageController::class, 'contactUs'])->name('contactUs');

Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/registration', [registrationController::class, 'registration'])->name('registration');

Route::post('/login', [loginController::class, 'loginSubmit'])->name('login');
Route::post('/registration', [registrationController::class, 'registrationSubmit'])->name('registration');

Route::get('/login', [loginController::class, 'logOut'])->name('logOut');
