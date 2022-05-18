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
Route::get('/employee/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::get('/employee/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee/create', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/dash', [App\Http\Controllers\EmployeeController::class, 'dash'])->name('employee.dash');
Route::get('/employee/timesheet', [App\Http\Controllers\EmployeeController::class, 'add_time'])->name('employee.add_time');


Route::get('/courier', [App\Http\Controllers\ShipmentController::class, 'index'])->name('courier.index');
Route::get('/courier/create', [App\Http\Controllers\ShipmentController::class, 'create'])->name('courier.create');
Route::get('/courier/edit/{id}', [App\Http\Controllers\ShipmentController::class, 'edit'])->name('courier.edit');
Route::get('/courier/label/{id}', [App\Http\Controllers\ShipmentController::class, 'PDFgenerate'])->name('courier.label');
Route::get('/courier/label2/{id}', [App\Http\Controllers\ShipmentController::class, 'label2'])->name('label2');
Route::post('/courier/create', [App\Http\Controllers\ShipmentController::class, 'store'])->name('courier.store');
Route::get('/dcustomer', [App\Http\Controllers\ShipmentController::class, 'dcustomer'])->name('customer.details');

//status
Route::get('/maintenance/status', [App\Http\Controllers\CourierStatusContorller::class, 'index'])->name('status.index');
Route::get('/maintenance/status/create', [App\Http\Controllers\CourierStatusContorller::class, 'create'])->name('status.create');
Route::post('/maintenance/status/create', [App\Http\Controllers\CourierStatusContorller::class, 'store'])->name('status.store');

//coutnry
Route::get('/maintenance/country', [App\Http\Controllers\CountryController::class, 'index'])->name('country.index');
Route::get('/maintenance/country/create', [App\Http\Controllers\CountryController::class, 'create'])->name('country.create');
Route::post('/maintenance/country/create', [App\Http\Controllers\CountryController::class, 'store'])->name('country.store');
Route::get('/maintenance/country/edit/{id}', [App\Http\Controllers\CountryController::class, 'edit'])->name('country.edit');
Route::put('/maintenance/country/update/{id}', [App\Http\Controllers\CountryController::class, 'update'])->name('country.update');
// Route::get('/maintenance/country/delete/{id}', [App\Http\Controllers\CountryController::class, 'destroy'])->name('country.destroy');
// Route::post('/maintenance/country/delete/{id}', [App\Http\Controllers\CountryController::class, 'destroy'])->name('country.destroy');

//city
Route::get('/maintenance/city', [App\Http\Controllers\CityController::class, 'index'])->name('city.index');
Route::get('/maintenance/city/create', [App\Http\Controllers\CityController::class, 'create'])->name('city.create');
Route::post('/maintenance/city/create', [App\Http\Controllers\CityController::class, 'store'])->name('city.store');
Route::post('/get_city', [App\Http\Controllers\CityController::class, 'get_city'])->name('city.get_city');

//package 
Route::get('/maintenance/package', [App\Http\Controllers\PackageTypeController::class, 'index'])->name('package.index');
Route::get('/maintenance/package/create', [App\Http\Controllers\PackageTypeController::class, 'create'])->name('package.create');
Route::post('/maintenance/package/create', [App\Http\Controllers\PackageTypeController::class, 'store'])->name('package.store');
Route::get('/maintenance/package/edit/{id}', [App\Http\Controllers\PackageTypeController::class, 'edit'])->name('package.edit');
Route::put('/maintenance/package/update/{id}', [App\Http\Controllers\PackageTypeController::class, 'update'])->name('package.update');

//ship mode 
Route::get('/maintenance/shipmode', [App\Http\Controllers\ShippingModeController::class, 'index'])->name('shipmode.index');
Route::get('/maintenance/shipmode/create', [App\Http\Controllers\ShippingModeController::class, 'create'])->name('shipmode.create');
Route::post('/maintenance/shipmode/create', [App\Http\Controllers\ShippingModeController::class, 'store'])->name('shipmode.store');
Route::get('/maintenance/shipmode/edit/{id}', [App\Http\Controllers\ShippingModeController::class, 'edit'])->name('shipmode.edit');
Route::put('/maintenance/shipmode/update/{id}', [App\Http\Controllers\ShippingModeController::class, 'update'])->name('shipmode.update');

//courier company
Route::get('/maintenance/company', [App\Http\Controllers\CourierCompanyController::class, 'index'])->name('ccompany.index');
Route::get('/maintenance/company/create', [App\Http\Controllers\CourierCompanyController::class, 'create'])->name('ccompany.create');
Route::post('/maintenance/company/create', [App\Http\Controllers\CourierCompanyController::class, 'store'])->name('ccompany.store');
Route::get('/maintenance/company/edit/{id}', [App\Http\Controllers\CourierCompanyController::class, 'edit'])->name('ccompany.edit');
Route::put('/maintenance/company/update/{id}', [App\Http\Controllers\CourierCompanyController::class, 'update'])->name('ccompany.update');

//payment method
Route::get('/maintenance/payment', [App\Http\Controllers\PaymentModeController::class, 'index'])->name('payment.index');
Route::get('/maintenance/payment/create', [App\Http\Controllers\PaymentModeController::class, 'create'])->name('payment.create');
Route::post('/maintenance/payment/create', [App\Http\Controllers\PaymentModeController::class, 'store'])->name('payment.store');
Route::get('/maintenance/payment/edit/{id}', [App\Http\Controllers\PaymentModeController::class, 'edit'])->name('payment.edit');
Route::put('/maintenance/payment/update/{id}', [App\Http\Controllers\PaymentModeController::class, 'update'])->name('payment.update');


//customer
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer/create', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/update/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');
// Route::get('/customer/delete/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');
// Route::post('/customer/delete/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');




Route::get('/sample',[App\Http\Controllers\SampleController::class, 'index'])->name('sample');
Route::get('/front',[App\Http\Controllers\SampleController::class, 'front'])->name('front');
Route::get('/back',[App\Http\Controllers\SampleController::class, 'back'])->name('back');


Route::get('/zkteco',[App\Http\Controllers\ZKController::class, 'index'])->name('zkteco');