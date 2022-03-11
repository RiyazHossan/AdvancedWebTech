<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
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


Route::get('/home', [userController::class, 'home'])->name('userHome');
Route::get('/product', [userController::class, 'product'])->name('product');
Route::get('/ourTeam', [userController::class, 'ourTeam'])->name('ourTeam');
Route::get('/aboutUs', [userController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactUs', [userController::class, 'contactUs'])->name('contactUs');



Route::get('/homeAdmin', [adminController::class, 'home'])->name('adminHome');
Route::get('/product', [adminController::class, 'product'])->name('adminProduct');
Route::get('/ourTeam', [adminController::class, 'ourTeam'])->name('adminOurTeam');
Route::get('/aboutUs', [adminController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactUs', [adminController::class, 'contactUs'])->name('contactUs');
Route::get('/userList', [adminController::class, 'userList'])->name('userList');
Route::get('/addUser', [adminController::class, 'addUser'])->name('addUser');





Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/registration', [registrationController::class, 'registration'])->name('registration');

Route::post('/login', [loginController::class, 'loginSubmit'])->name('login');
Route::post('/registration', [registrationController::class, 'registrationSubmit'])->name('registration');

Route::get('/login', [loginController::class, 'logOut'])->name('logOut');



