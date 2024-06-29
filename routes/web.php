<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PricingController;

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
Route::post('/payment/store', [HomeController::class, 'makePaymentRequest'])->name('payment.store');

Route::get('check/fields', [TenantController::class, 'checkDbFields'])->name('check.fields');
Route::get('check/domain', [TenantController::class, 'checkDomainName'])->name('check.domain');

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

    Route::get('account', [AccountController::class, 'account'])->name('account');
    Route::post('update/profile', [AccountController::class, 'updateProfile'])->name('update.profile');
    Route::post('account/logs', [AccountController::class, 'accountLoginSessionLogs'])->name('account.logs');

    Route::get('pricing', [PricingController::class, 'pricing'])->name('pricing');
    Route::get('pricing/create', [PricingController::class, 'createPricing'])->name('pricing.create');
    Route::post('pricing/store', [PricingController::class, 'pricingStore'])->name('pricing.store');
    Route::post('pricing/delete', [PricingController::class, 'pricingDelete'])->name('pricing.delete');
    Route::get('pricing/edit/{id}', [PricingController::class, 'pricingEdit'])->name('pricing.edit');
});

require __DIR__.'/auth.php';
