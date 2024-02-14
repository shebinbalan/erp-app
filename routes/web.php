<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/home', [App\Http\Controllers\Admin\FrontendController::class,'index']);
    Route::get('/customers', [App\Http\Controllers\Admin\CustomerController::class,'index']);
    Route::get('/add-customer', [App\Http\Controllers\Admin\CustomerController::class,'add']);
    Route::post('/insert-customer', [App\Http\Controllers\Admin\CustomerController::class,'insert']);
    Route::get('/edit-customer/{id}', [App\Http\Controllers\Admin\CustomerController::class,'edit']);
    Route::put('/update-customer/{id}', [App\Http\Controllers\Admin\CustomerController::class,'update']);
    Route::get('/delete-customer/{id}', [App\Http\Controllers\Admin\CustomerController::class,'destroy']);


    Route::get('/invoices', [App\Http\Controllers\Admin\InvoiceController::class,'index']);
    Route::get('/add-invoice', [App\Http\Controllers\Admin\InvoiceController::class,'add']);
    Route::post('/insert-invoice', [App\Http\Controllers\Admin\InvoiceController::class,'insert']);
    Route::get('/edit-invoice/{id}', [App\Http\Controllers\Admin\InvoiceController::class,'edit']);
    Route::put('/update-invoice/{id}', [App\Http\Controllers\Admin\InvoiceController::class,'update']);
    Route::get('/delete-invoice/{id}', [App\Http\Controllers\Admin\InvoiceController::class,'destroy']);

    
 });