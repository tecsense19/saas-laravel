<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;

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
    return view('front.welcome');
});

Route::get('/customer/details/{plan_id}', [HomeController::class, 'showCustomerForm'])->name('customer.details.form');
Route::post('/customer/store', [HomeController::class, 'storeCustomer'])->name('customer.store');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('tenants', TenantController::class);
    Route::post('tenants/list', [TenantController::class, 'list'])->name('tenants.list');
    Route::post('tenants/delete', [TenantController::class, 'delete'])->name('tenants.delete');
    Route::get('tenants/check/fields', [TenantController::class, 'checkDbFields'])->name('tenants.check.fields');
    Route::get('tenants/check/domain', [TenantController::class, 'checkDomainName'])->name('tenants.check.domain');
});

require __DIR__.'/auth.php';
