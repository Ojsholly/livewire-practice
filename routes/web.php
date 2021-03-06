<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TableController;

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

Route::prefix('tables')->group(function () {
    Route::get('datatable', [TableController::class, 'datatable']);
    Route::get('infinite-scroll', [TableController::class, 'infinite_scroll']);
    Route::get('selectable-columns', [TableController::class, 'selectable_columns']);
});

Route::prefix('forms')->group(function () {
    Route::get('contact-form', [FormController::class, 'contact_form']);
});