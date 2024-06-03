<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\{ HomeController, FeedBackController, BankAccountController, BarcodeController };
// use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
// use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['prefix' => 'v1'], function () {
// // Route::middleware('tenant')->group(function () {
// // Route::middleware(['auth:sanctum', 'tenancy'])->group(function () {
//     Route::post('/get/all/user', [HomeController::class, 'getAllUser']);
// });

Route::get('/v1/get/all/company', [HomeController::class, 'getAllCompany']);

Route::middleware(['identifyTenant'])->group(function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::post('/login', [HomeController::class, 'login']);
        Route::post('/send/otp', [HomeController::class, 'sendOtp']);
        Route::post('/verify/otp', [HomeController::class, 'verifyOtp']);
        Route::post('/logout', [HomeController::class, 'logout']);
        Route::post('/get/all/role', [HomeController::class, 'getAllRole']);
        Route::post('/get/all/country', [HomeController::class, 'getAllCountry']);
        Route::post('/country/wise/state', [HomeController::class, 'countryWiseState']);
        Route::post('/state/wise/city', [HomeController::class, 'stateWiseCity']);
        
        Route::middleware(['userAuthentication'])->group(function () {
            Route::post('/get/all/user', [HomeController::class, 'getAllUser']);

            // FeedBack
            Route::post('/create/feedback', [FeedBackController::class, 'createFeedback']);

            // Bank Account
            Route::post('add/update/bank/account', [BankAccountController::class, 'addBankAccount']);
            Route::post('list/bank/account', [BankAccountController::class, 'listBankAccount']);
            Route::post('delete/bank/account', [BankAccountController::class, 'deleteBankAccount']);

            // Barcode
            Route::post('scan/barcode', [BarcodeController::class, 'scanCode']);
            Route::post('redeem/request', [BarcodeController::class, 'redeemRequest']);
        });
    });
});