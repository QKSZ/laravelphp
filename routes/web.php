<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseReportController;
use App\Http\Controllers\HomeController;
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
// Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']); /*asi es como se llaman las rutas en laravel 8*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class,'index']);

Route::resource('expense_reports', ExpenseReportController::class);
