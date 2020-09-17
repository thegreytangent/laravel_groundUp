<?php

use Illuminate\Support\Facades\Auth;
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




// Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::get('contact', [App\Http\Controllers\ContactFormController::class, 'create'])->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

Route::view('about-me', 'about');


Route::resource('customers', 'CustomersController');;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
