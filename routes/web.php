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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/edit', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::get('/employee/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee/create', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');


Route::get('/courier', [App\Http\Controllers\ShipmentController::class, 'index'])->name('courier.index');
Route::get('/courier/create', [App\Http\Controllers\ShipmentController::class, 'create'])->name('courier.create');

//status
Route::get('/maintenance/status', [App\Http\Controllers\CourierStatusContorller::class, 'index'])->name('status.index');
Route::get('/maintenance/status/create', [App\Http\Controllers\CourierStatusContorller::class, 'create'])->name('status.create');
Route::post('/maintenance/status/create', [App\Http\Controllers\CourierStatusContorller::class, 'store'])->name('status.store');

//coutnry
Route::get('/maintenance/country', [App\Http\Controllers\CountryController::class, 'index'])->name('country.index');
Route::get('/maintenance/country/create', [App\Http\Controllers\CountryController::class, 'create'])->name('country.create');
Route::post('/maintenance/country/create', [App\Http\Controllers\CountryController::class, 'store'])->name('country.store');

//city
Route::get('/maintenance/city', [App\Http\Controllers\CityController::class, 'index'])->name('city.index');
Route::get('/maintenance/city/create', [App\Http\Controllers\CityController::class, 'create'])->name('city.create');
Route::post('/maintenance/city/create', [App\Http\Controllers\CityController::class, 'store'])->name('city.store');