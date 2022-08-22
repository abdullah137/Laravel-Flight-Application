<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FlightController;

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

// Show the Home Page
Route::get('/', [IndexController::class, 'index']);

// Show the About Page
Route::get('/about', [IndexController::class, 'aboutPage']);

// Show the Contact Page
Route::get('/contact', [IndexController::class, 'contactPage']);

// Show the Error Page
Route::get('/404', [IndexController::class, 'errorPage']);

// Show Flight Result
Route::get('/search', [FlightController::class, 'searchBooking']);

// Show Terms And Condition
Route::get('/terms', [IndexController::class, 'termsPage']);

// Show Result
Route::get('/result', [FlightController::class, 'result']);