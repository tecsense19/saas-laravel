<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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
    UserReportController,
    EventReportController,
    LanguageController,
    RoleController,
    PermissionController
};
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('app.auth.login');
        }
    });

    // Route::get('/dashboard', function () {
    //     return view('app.dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/dashboard', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

    // Set Default Language
    Route::get('set-language/{locale}', function ($locale) {
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    })->name('set-language');    
    
    Route::middleware('auth')->group(function () {
        Route::controller(ProfileController::class)->name('profile.')->group(function () {
            Route::get('/profile', 'edit')->name('edit');
            Route::patch('/profile', 'update')->name('update');
            Route::delete('/profile', 'destroy')->name('destroy');
        });
    
        Route::group(['middleware' => ['role:Admin']], function () { 
            // Users
            Route::resource('users', UserController::class)->middleware('permission:User Create');
            Route::post('users/list', [UserController::class, 'list'])->name('users.list');
            Route::post('users/delete', [UserController::class, 'delete'])->name('users.delete');

            // Categories
            Route::controller(CategoryController::class)->prefix('categories')->name('categories.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/store', 'store')->name('store');
                Route::get('/check/name', 'checkCategoryName')->name('name.check');
                Route::post('/delete', 'delete')->name('delete');
            });
            
            // Variant
            Route::controller(VariantController::class)->prefix('variant')->name('variant.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/store', 'store')->name('store');
                Route::get('/check/name', 'checkVariantName')->name('name.check');
                Route::get('/check/option/name', 'checkVariantOptionName')->name('option.name.check');
                Route::post('/delete', 'delete')->name('delete');
            });
            
            // HSN/SAC
            Route::controller(HSNSACController::class)->prefix('hsnsac')->name('hsnsac.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/store', 'store')->name('store');
                Route::get('/check/name', 'checkHSNSACName')->name('name.check');
                Route::post('/delete', 'delete')->name('delete');
            });

            // QR Point
            Route::controller(QRPointController::class)->prefix('qrpoint')->name('qrpoint.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/store', 'store')->name('store');
                Route::get('/check', 'checkQRPoint')->name('check');
                Route::post('/delete', 'delete')->name('delete');
            });
            
            // QR Code
            Route::controller(QRCodeController::class)->prefix('qrcode')->name('qrcode.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/store', 'store')->name('store');
                Route::post('/delete', 'delete')->name('delete');
                Route::post('/check/last/id', 'checkLastId')->name('lastid');
                Route::post('/download', 'qrCodeDownload')->name('download');
            });

            // Products
            Route::controller(ProductController::class)->prefix('product')->name('product.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/list', 'list')->name('list');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/store', 'store')->name('store');
                Route::get('/check/name', 'checkProductName')->name('name.check');
                Route::post('/delete', 'delete')->name('delete');
            });

            // Events
            Route::controller(EventController::class)->prefix('events')->name('events.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/store', 'store')->name('store');
                Route::get('/check/name', 'checkEventName')->name('check');
                Route::post('/delete', 'delete')->name('delete');
            });

            // Video
            Route::controller(VideoGalleryController::class)->prefix('video')->name('video.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/gallery/store', 'store')->name('store');
                Route::get('/check/title', 'checkTitle')->name('title.check');
                Route::post('/delete', 'delete')->name('delete');
            });
            
            // Gallery
            Route::controller(VideoGalleryController::class)->prefix('gallery')->name('gallery.')->group(function () {
                Route::get('/', 'galleryIndex')->name('index');
                Route::post('/list', 'galleryList')->name('list');
                Route::get('/check/title', 'checkTitle')->name('title.check');
                Route::post('/delete', 'delete')->name('delete');
            });

            // Feedback
            Route::controller(FeedBackController::class)->prefix('feedback')->name('feedback.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/delete', 'delete')->name('delete');
            });
            
            // Account Management redeem
            Route::controller(AccountManagement::class)->prefix('redeem')->name('redeem.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::get('/view/{id}', 'view')->name('view');
                Route::post('/history/list', 'redeemHistory')->name('history.list');
                Route::get('/request', 'redeemRequest')->name('request');
                Route::post('/request/list', 'redeemRequestList')->name('request.list');
            });
            
            Route::get('export/redemption', [AccountManagement::class, 'exportRedemption'])->name('export.redemption');
            Route::post('import/redemption', [AccountManagement::class, 'importRedemption'])->name('import.redemption');
            
            // Our Catalogue
            Route::controller(OurCatalogueController::class)->prefix('catalogue')->name('catalogue.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/store', 'store')->name('store');
                Route::get('/check/title', 'checkTitle')->name('title.check');
                Route::post('/delete', 'delete')->name('delete');
            });

            // Reports
            Route::controller(UserReportController::class)->prefix('user/report')->name('user.report.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/export', 'usersReportExport')->name('export');
            });

            // Event Reports
            Route::controller(EventReportController::class)->prefix('event/report')->name('event.report.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/export', 'eventReportExport')->name('export');
            });

            // Language Master
            Route::controller(LanguageController::class)->prefix('language')->name('language.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/store', 'store')->name('store');
                Route::post('/master/store', 'appMasterLangStore')->name('master.store');
                Route::post('/search', 'search')->name('search');
            });
            
            // Roles
            Route::controller(RoleController::class)->prefix('roles')->name('roles.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::get('/check/name', 'roleCheckName')->name('name.check');
                Route::post('/delete', 'delete')->name('delete');
            });
            
            // Permissions
            Route::controller(PermissionController::class)->prefix('permissions')->name('permissions.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/list', 'list')->name('list');
                Route::post('/store', 'store')->name('store');
                Route::get('/check/title', 'checkPermissionTitle')->name('title.check');
                Route::post('/search', 'search')->name('search');
                Route::post('/delete', 'delete')->name('delete');
                Route::post('/store/bulk', 'createBulkPermissions')->name('delete');
            });
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
