<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\SettingsController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/select', [SelectController::class, 'index'])->name('select');
Route::post('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/booking', [BookingController::class, 'index']);
Route::post('/payment', [PaymentController::class, 'index'])->name('payment');
Route::get('/success', [PaymentController::class, 'success'])->name('checkout.success');
Route::get('/cancel', [PaymentController::class, 'cancel'])->name('checkout.cancel');
Route::get('/webhook', [PaymentController::class, 'webhook'])->name('checkout.webhook');
Route::get('/detail', [DetailController::class, 'index']);
Route::get('/car', [CarController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/testimonial', [TestimonialController::class, 'index']);

Route::post('/findAvailableCars', [Controller::class, 'findAvailableCars'])->name('findAvailableCars');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/orders', [OrdersController::class, 'index'])->name('orders');

Route::middleware(['auth:sanctum', 'verified'])->get('/customers', [CustomersController::class, 'index'])->name('customers');

Route::middleware(['auth:sanctum', 'verified'])->get('/assets', [AssetsController::class, 'index'])->name('assets');

Route::middleware(['auth:sanctum', 'verified'])->get('/settings', [SettingsController::class, 'index'])->name('settings');

Route::middleware(['auth:sanctum', 'verified'])->get('/locations', [LocationsController::class, 'index'])->name('locations');

Route::middleware(['auth:sanctum', 'verified'])->get('/addons', [InsuranceController::class, 'index'])->name('addons');

Route::get('/form', function () {
    return view('form');
});

Route::get('/test/env', function () {
    dd(env('DB_DATABASE')); // Dump 'db' variable value one by one
});