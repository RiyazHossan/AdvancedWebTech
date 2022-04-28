<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

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
    return view('Pages.Login');
});
//----------------------------Admin----------------------------//
Route::get('/home/Admin', [AdminController::class, 'index'])->name('homeAdmin');
Route::get('/profileAdmin', [AdminController::class, 'profile'])->name('profileAdmin')->middleware('ValidAdmin');
Route::post('/profileAdmin', [AdminController::class, 'profileEdit'])->name('profileAdminEdit');
Route::get('/admin/list', [AdminController::class, 'list'])->name('listAdmin')->middleware('ValidAdmin');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/addUser', [AdminController::class, 'addUser'])->name('addUser')->middleware('ValidAdmin');
Route::post('/addUser', [AdminController::class, 'addUserSubmit'])->name('addUser');
Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->middleware('ValidAdmin');
Route::post('/editUser', [AdminController::class, 'editUserSubmit'])->name('editUser');
Route::get('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->middleware('ValidAdmin');
Route::post('/deleteUser', [AdminController::class, 'deleteUserSubmit'])->name('deleteUser');

//----------------------------User----------------------------//
Route::get('/home/User', [UserController::class, 'index'])->name('homeUser');
Route::get('/team', [UserController::class, 'team'])->name('teamUser')->middleware('ValidUser');
Route::get('/profile', [UserController::class, 'profile'])->name('profileUser')->middleware('ValidUser');
Route::post('/profileAdmin', [UserController::class, 'profileEdit'])->name('profileUserEdit');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


//----------------------------Login&Registration----------------------------//
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login');

Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'registrationSubmit'])->name('registration');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
