<?php

use Illuminate\Support\Facades\Route;

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
    return view('/users/profession');
});
Route::get('/profession', function () {
    return view('/users/profession');
});
Route::get('/admin', function () {
    return view('/admin/adminDashboard');
});
Route::post('/profession', [\App\Http\Controllers\UsersController::class,'userRegister']);
Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
