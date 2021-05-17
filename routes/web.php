<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CompaniesController;

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

Route::view('/', 'welcome');
Route::view('contact', 'contact');
Route::view('about', 'about');

Route::get('customers', [CustomersController::class, 'index']);
Route::get('customers/create', [CustomersController::class, 'create']);
Route::post('customers', [CustomersController::class, 'store']);

Route::get('companies', [CompaniesController::class, 'index']);
Route::get('companies/create', [CompaniesController::class, 'create']);
Route::post('companies', [CompaniesController::class, 'store']);