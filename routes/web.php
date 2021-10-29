<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::view('about', 'about')->middleware('test');

//company
Route::get('companies', [CompaniesController::class, 'index']);
Route::get('companies/create', [CompaniesController::class, 'create']);
Route::post('companies', [CompaniesController::class, 'store']);

//customer
// Route::get('customers', [CustomersController::class, 'index']);
// Route::get('customers/create', [CustomersController::class, 'create']);
// Route::post('customers', [CustomersController::class, 'store']);
// Route::get('customers/{customer}', [CustomersController::class, 'show']);
// Route::get('customers/{customer}/edit', [CustomersController::class, 'edit']);
// Route::patch('customers/{customer}', [CustomersController::class, 'update']);
// Route::delete('customers/{customer}', [CustomersController::class, 'destroy']);

//as we have followed all the conventions, we can have a single route replacing the above routes, as follows
Route::resource('customers', CustomersController::class);
// Route::resource('customers', CustomersController::class)->middleware('auth'); //route level middleware


//contact
Route::get('contact', [ContactFormController::class, 'create']);
Route::post('contact', [ContactFormController::class, 'store']);

// Route::resource('contact', ContactFormController::class);
// Route::get('contact', 'ContactFormController@create');
// Route::view('contact', 'contact');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');