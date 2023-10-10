<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
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
    return view('index');
})->name('home');
Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');
Route::put('/companies/update/{company}', [CompanyController::class, 'update'])->name('companies.update');
Route::delete('/companies/destroy/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');
Route::get('/companies/edit/{company}', [CompanyController::class, 'edit'])->name('companies.edit');
Route::get('/companies/show/{company}', [CompanyController::class, 'show'])->name('companies.show');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::put('/users/update/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/destroy/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/show/{user}', [UserController::class, 'show'])->name('users.show');
//Route::namespace('Company')-> group(function () {
//    Route::get('detail', 'CompanyController@getCompanyDetail');
//    Route::get('create', 'CompanyController@register');
//    Route::get('all', 'CompanyController@index');
//});
