<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\{ HomeController, FeedBackController, BankAccountController, BarcodeController, ProductController };
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
        Route::controller(HomeController::class)->group(function () {
            Route::post('/login', 'login');
            Route::post('/send/otp', 'sendOtp');
            Route::post('/verify/otp', 'verifyOtp');
            Route::post('/logout', 'logout');
            Route::post('/get/all/role', 'getAllRole');
            Route::post('/get/all/country', 'getAllCountry');
            Route::post('/country/wise/state', 'countryWiseState');
            Route::post('/state/wise/city', 'stateWiseCity');
        });
        
        Route::middleware(['userAuthentication'])->group(function () {
            Route::post('/get/all/user', [HomeController::class, 'getAllUser']);

            // FeedBack
            Route::post('/create/feedback', [FeedBackController::class, 'createFeedback']);

            // Bank Account
            Route::controller(BankAccountController::class)->group(function () {
                Route::post('add/update/bank/account', 'addBankAccount');
                Route::post('list/bank/account', 'listBankAccount');
                Route::post('delete/bank/account', 'deleteBankAccount');
            });

            Route::controller(BarcodeController::class)->group(function () {
                // Barcode
                Route::post('scan/barcode', 'scanCode');
                Route::post('redeem/request', 'redeemRequest');

                // Event User
                Route::post('scan/event/barcode', 'scanEventBarcode');
            });

            // Product
            Route::post('product/list', [ProductController::class, 'productList']);
        });
    });
});