<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\App\{
    ProfileController,
    UserController,
    LocationController,
    CategoryController,
    VariantController,
    HSNSACController,
    QRPointController,
    QRCodeController,
    ProductController,
    EventController,
    VideoGalleryController,
    FeedBackController,
    AccountManagement,
    OurCatalogueController,
    UserReportController
};

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    // Route::get('/', function () {
    //     return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
    // });
    Route::get('/', function () {
        return view('app.auth.login');
    });

    Route::get('/dashboard', function () {
        return view('app.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
        Route::group(['middleware' => ['role:Admin']], function () { 
            // Users
            Route::resource('users', UserController::class);
            Route::post('users/list', [UserController::class, 'list'])->name('users.list');
            Route::post('users/delete', [UserController::class, 'delete'])->name('users.delete');

            // Categories
            Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
            Route::post('categories/list', [CategoryController::class, 'list'])->name('categories.list');
            Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
            Route::get('check/category/name', [CategoryController::class, 'checkCategoryName'])->name('categories.name.check');
            Route::post('categories/delete', [CategoryController::class, 'delete'])->name('categories.delete');
            
            // Variant
            Route::get('variant', [VariantController::class, 'index'])->name('variant.index');
            Route::post('variant/list', [VariantController::class, 'list'])->name('variant.list');
            Route::post('variant/store', [VariantController::class, 'store'])->name('variant.store');
            Route::get('check/variant/name', [VariantController::class, 'checkVariantName'])->name('variant.name.check');
            Route::get('check/variant/option/name', [VariantController::class, 'checkVariantOptionName'])->name('variant.option.name.check');
            Route::post('variant/delete', [VariantController::class, 'delete'])->name('variant.delete');
            
            // HSN/SAC
            Route::get('hsnsac', [HSNSACController::class, 'index'])->name('hsnsac.index');
            Route::post('hsnsac/list', [HSNSACController::class, 'list'])->name('hsnsac.list');
            Route::post('hsnsac/store', [HSNSACController::class, 'store'])->name('hsnsac.store');
            Route::get('check/hsnsac/name', [HSNSACController::class, 'checkHSNSACName'])->name('hsnsac.name.check');
            Route::post('hsnsac/delete', [HSNSACController::class, 'delete'])->name('hsnsac.delete');

            // QR Point
            Route::get('qrpoint', [QRPointController::class, 'index'])->name('qrpoint.index');
            Route::post('qrpoint/list', [QRPointController::class, 'list'])->name('qrpoint.list');
            Route::post('qrpoint/store', [QRPointController::class, 'store'])->name('qrpoint.store');
            Route::get('check/qrpoint', [QRPointController::class, 'checkQRPoint'])->name('qrpoint.check');
            Route::post('qrpoint/delete', [QRPointController::class, 'delete'])->name('qrpoint.delete');
            
            // QR Code
            Route::get('qrcode', [QRCodeController::class, 'index'])->name('qrcode.index');
            Route::post('qrcode/list', [QRCodeController::class, 'list'])->name('qrcode.list');
            Route::post('qrcode/store', [QRCodeController::class, 'store'])->name('qrcode.store');
            Route::post('qrcode/delete', [QRCodeController::class, 'delete'])->name('qrcode.delete');
            Route::post('check/last/qrcode/id', [QRCodeController::class, 'checkLastId'])->name('qrcode.lastid');
            Route::post('qrcode/download', [QRCodeController::class, 'qrCodeDownload'])->name('qrcode.download');

            // Products
            Route::get('product', [ProductController::class, 'index'])->name('product.index');
            Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
            Route::post('product/list', [ProductController::class, 'list'])->name('product.list');
            Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
            Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
            Route::get('check/product/name', [ProductController::class, 'checkProductName'])->name('product.name.check');
            Route::post('product/delete', [ProductController::class, 'delete'])->name('product.delete');

            // Events
            Route::get('events', [EventController::class, 'index'])->name('events.index');
            Route::post('events/list', [EventController::class, 'list'])->name('events.list');
            Route::post('events/store', [EventController::class, 'store'])->name('events.store');
            Route::get('check/event/name', [EventController::class, 'checkEventName'])->name('events.check');
            Route::post('events/delete', [EventController::class, 'delete'])->name('events.delete');

            // Video
            Route::get('video', [VideoGalleryController::class, 'index'])->name('video.index');
            Route::post('video/list', [VideoGalleryController::class, 'list'])->name('video.list');
            Route::post('video/gallery/store', [VideoGalleryController::class, 'store'])->name('video.store');
            Route::get('check/video/title', [VideoGalleryController::class, 'checkTitle'])->name('video.title.check');
            Route::post('video/delete', [VideoGalleryController::class, 'delete'])->name('video.delete');

            // Gallery
            Route::get('gallery', [VideoGalleryController::class, 'galleryIndex'])->name('gallery.index');
            Route::post('gallery/list', [VideoGalleryController::class, 'galleryList'])->name('gallery.list');
            Route::post('video/gallery/store', [VideoGalleryController::class, 'store'])->name('gallery.store');
            Route::get('check/gallery/title', [VideoGalleryController::class, 'checkTitle'])->name('gallery.title.check');
            Route::post('gallery/delete', [VideoGalleryController::class, 'delete'])->name('gallery.delete');

            // Feedback
            Route::get('feedback', [FeedBackController::class, 'index'])->name('feedback.index');
            Route::post('feedback/list', [FeedBackController::class, 'list'])->name('feedback.list');
            Route::post('feedback/delete', [FeedBackController::class, 'delete'])->name('feedback.delete');

            // Account Management redeem
            Route::get('redeem', [AccountManagement::class, 'index'])->name('redeem.index');
            Route::post('redeem/list', [AccountManagement::class, 'list'])->name('redeem.list');
            Route::get('redeem/view/{id}', [AccountManagement::class, 'view'])->name('redeem.view');
            
            Route::post('redeem/history/list', [AccountManagement::class, 'redeemHistory'])->name('redeem.history.list');

            Route::get('redeem/request', [AccountManagement::class, 'redeemRequest'])->name('redeem.request');
            Route::post('redeem/request/list', [AccountManagement::class, 'redeemRequestList'])->name('redeem.request.list');
            Route::get('export/redemption', [AccountManagement::class, 'exportRedemption'])->name('export.redemption');
            Route::post('import/redemption', [AccountManagement::class, 'importRedemption'])->name('import.redemption');

            // Our Catalogue
            Route::get('catalogue', [OurCatalogueController::class, 'index'])->name('catalogue.index');
            Route::post('catalogue/list', [OurCatalogueController::class, 'list'])->name('catalogue.list');
            Route::post('catalogue/store', [OurCatalogueController::class, 'store'])->name('catalogue.store');
            Route::get('check/catalogue/title', [OurCatalogueController::class, 'checkTitle'])->name('catalogue.title.check');
            Route::post('catalogue/delete', [OurCatalogueController::class, 'delete'])->name('catalogue.delete');

            // Reports
            Route::get('user/report', [UserReportController::class, 'index'])->name('user.report.index');
            Route::post('user/report/list', [UserReportController::class, 'list'])->name('user.report.list');
            Route::post('user/report/export', [UserReportController::class, 'usersReportExport'])->name('user.report.export');
        });

        Route::get('js/{folder}/{filename}', function ($folder, $filename) {
            $path = resource_path("views/{$folder}/{$filename}.js");
            if (file_exists($path)) {
                return response()->file($path);
            } else {
                abort(404);
            }
        })->where('filename', '.*')->name('js');
        
        Route::get('/routes', function () {
            $routes = collect(Route::getRoutes())->map(function ($route) {
                return [
                    'method' => $route->methods()[0], // Get the HTTP method
                    'uri' => $route->uri(), // Get the route URI
                    'name' => $route->getName(), // Get the route name
                    'url' => url($route->uri()), // Get the full route URL
                ];
            });
        
            return $routes;
        });

        Route::get('/get/countries', [LocationController::class, 'getCountries'])->name('country.list');
        Route::get('/get/states/{countryId}', [LocationController::class, 'getStates'])->name('state.list');
        Route::get('/get/cities/{stateId}', [LocationController::class, 'getCities'])->name('city.list');

        Route::get('/get/states', [LocationController::class, 'getAllStates'])->name('all.state.list');
        Route::get('/get/cities', [LocationController::class, 'getAllCities'])->name('all.city.list');
    });
    
    require __DIR__.'/tenant-auth.php';
});
