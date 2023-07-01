<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\NewBuildingsController;
use App\Http\Controllers\front\OnRentController;
use App\Http\Controllers\front\LandController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\ResaleController;
use App\Http\Controllers\front\ProductController;
use App\Http\Controllers\back\AdminController;
use App\Http\Controllers\back\AboutController;
use App\Http\Controllers\back\BuildingTypesController;
use App\Http\Controllers\back\CategoryController;
use App\Http\Controllers\back\ContactController as AdminContactController;
use App\Http\Controllers\back\DistrcitController;
use App\Http\Controllers\back\FounderController;
use App\Http\Controllers\back\HeadersController;
use App\Http\Controllers\back\InstaPhotosController;
use App\Http\Controllers\back\LogoController;
use App\Http\Controllers\back\NewBuildingsController as AdminNewBuildingsController;
use App\Http\Controllers\back\ProductController as AdminProductController;

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/newbuildings', [NewBuildingsController::class, "index"])->name("newbuildings");
Route::get('/onebuilding/{id}', [NewBuildingsController::class, "onebuilding"])->name("onebuilding");
Route::post('/onebuilding/{id}', [NewBuildingsController::class, "onebuilding"])->name("onebuilding");
Route::get('/onrent', [OnRentController::class, "index"])->name("onrent");
Route::post('/onrent', [OnRentController::class, "index"])->name("onrent");
Route::get('/land', [LandController::class, "index"])->name("land");
Route::get('/contact', [ContactController::class, "index"])->name("contact");
Route::get('/resale', [ResaleController::class, "index"])->name("resale");
Route::post('/resale', [ResaleController::class, "index"])->name("resale");
Route::get('/product/{id}', [ProductController::class, "index"])->name("product");


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', [AdminController::class, "index"])->name("home")->middleware('checklogin');
    Route::get('/login', [AdminController::class, "login"])->name("login");
    Route::post('/login_check', [AdminController::class, "login_check"])->name("login_check");
    Route::get('/logout', [AdminController::class, "logout"])->name("logout");

    Route::group(['middleware' => 'checklogin', 'prefix' => 'logo', 'as' => 'logo.'], function() {
        Route::get('/', [LogoController::class, "index"])->name("index");
        Route::post('/create', [LogoController::class, "create"])->name("create");
        Route::get('/delete/{id}', [LogoController::class, "delete"])->name("delete");
    });
    Route::group(['middleware' => 'checklogin', 'prefix' => 'about', 'as' => 'about.'], function() {
        Route::get('/', [AboutController::class, "index"])->name("index");
        Route::get('/add', [AboutController::class, "add"])->name("add");
        Route::post('/create', [AboutController::class, "create"])->name("create");
        Route::get('/change/{id}', [AboutController::class, "change"])->name("change");
        Route::post('/update/{id}', [AboutController::class, "update"])->name("update");
        Route::get('/delete/{id}', [AboutController::class, "delete"])->name("delete");
    });



    Route::group(['middleware' => 'checklogin', 'prefix' => 'buildingtypes', 'as' => 'buildingtypes.'], function() {
        Route::get('/', [BuildingTypesController::class, "index"])->name("index");
        Route::get('/add', [BuildingTypesController::class, "add"])->name("add");
        Route::post('/create', [BuildingTypesController::class, "create"])->name("create");
        Route::get('/change/{id}', [BuildingTypesController::class, "change"])->name("change");
        Route::post('/update/{id}', [BuildingTypesController::class, "update"])->name("update");
        Route::get('/delete/{id}', [BuildingTypesController::class, "delete"])->name("delete");
    });



    Route::group(['middleware' => 'checklogin', 'prefix' => 'contact', 'as' => 'contact.'], function() {
        Route::get('/', [AdminContactController::class, "index"])->name("index");
        Route::get('/add', [AdminContactController::class, "add"])->name("add");
        Route::post('/create', [AdminContactController::class, "create"])->name("create");
        Route::get('/delete/{id}', [AdminContactController::class, "delete"])->name("delete");
        Route::get('/change/{id}', [AdminContactController::class, "change"])->name("change");
        Route::post('/update/{id}', [AdminContactController::class, "update"])->name("update");
    });

    Route::group(['middleware' => 'checklogin', 'prefix' => 'districts', 'as' => 'districts.'], function() {
        Route::get('/', [DistrcitController::class, "index"])->name("index");
        Route::get('/add', [DistrcitController::class, "add"])->name("add");
        Route::post('/create', [DistrcitController::class, "create"])->name("create");
        Route::get('/change/{id}', [DistrcitController::class, "change"])->name("change");
        Route::post('/update/{id}', [DistrcitController::class, "update"])->name("update");
        Route::get('/delete/{id}', [DistrcitController::class, "delete"])->name("delete");
    });

    Route::group(['middleware' => 'checklogin', 'prefix' => 'founder', 'as' => 'founder.'], function() {
        Route::get('/', [FounderController::class, "index"])->name("index");
        Route::get('/add', [FounderController::class, "add"])->name("add");
        Route::post('/create', [FounderController::class, "create"])->name("create");
        Route::get('/change/{id}', [FounderController::class, "change"])->name("change");
        Route::get('/delete/{id}', [FounderController::class, "delete"])->name("delete");
    });

    Route::group(['middleware' => 'checklogin', 'prefix' => 'headers', 'as' => 'headers.'], function() {
        Route::get('/', [HeadersController::class, "index"])->name("index");
        Route::get('/add', [HeadersController::class, "add"])->name("add");
        Route::post('/create', [HeadersController::class, "create"])->name("create");
        Route::get('/change/{id}', [HeadersController::class, "change"])->name("change");
        Route::post('/update/{id}', [HeadersController::class, "update"])->name("update");
        Route::get('/delete/{id}', [HeadersController::class, "delete"])->name("delete");
    });


    Route::group(['middleware' => 'checklogin', 'prefix' => 'instaphotos', 'as' => 'instaphotos.'], function() {
        Route::get('/', [InstaPhotosController::class, "index"])->name("index");
        Route::get('/add', [InstaPhotosController::class, "add"])->name("add");
        Route::post('/create', [InstaPhotosController::class, "create"])->name("create");
        Route::get('/change/{id}', [InstaPhotosController::class, "change"])->name("change");
        Route::post('/update/{id}', [InstaPhotosController::class, "update"])->name("update");
        Route::get('/delete/{id}', [InstaPhotosController::class, "delete"])->name("delete");
    });


    Route::group(['middleware' => 'checklogin', 'prefix' => 'newbuildings', 'as' => 'newbuildings.'], function() {
        Route::get('/', [AdminNewBuildingsController::class, "index"])->name("index");
        Route::get('/add', [AdminNewBuildingsController::class, "add"])->name("add");
        Route::post('/create', [AdminNewBuildingsController::class, "create"])->name("create");
        Route::get('/change/{id}', [AdminNewBuildingsController::class, "change"])->name("change");
        Route::post('/update/{id}', [AdminNewBuildingsController::class, "update"])->name("update");
        Route::get('/delete/{id}', [AdminNewBuildingsController::class, "delete"])->name("delete");
    });


    Route::group(['middleware' => 'checklogin', 'prefix' => 'products', 'as' => 'products.'], function() {
        Route::get('/', [AdminProductController::class, "index"])->name("index");
        Route::get('/add', [AdminProductController::class, "add"])->name("add");
        Route::post('/create', [AdminProductController::class, "create"])->name("create");
        Route::get('/change/{id}', [AdminProductController::class, "change"])->name("change");
        Route::post('/update/{id}', [AdminProductController::class, "update"])->name("update");
        Route::get('/delete/{id}', [AdminProductController::class, "delete"])->name("delete");
    });
    Route::group(['middleware' => 'checklogin', 'prefix' => 'products_images', 'as' => 'products_images.'], function() {
        Route::get('/', [AdminProductController::class, "images"])->name("index");
        Route::get('/image_add/{id}', [AdminProductController::class, "image_add"])->name("image_add");
        Route::post('/image_create/{id}', [AdminProductController::class, "image_create"])->name("image_create");
        Route::get('/{id}', [AdminProductController::class, "imagesId"])->name("imagesId");
        Route::get('/delete/{id}/{product_id}', [AdminProductController::class, "products_images_delete"])->name("delete");
        Route::get('/changeMain/{id}/{product_id}', [AdminProductController::class, "changeMain"])->name("changeMain");
    });

});


