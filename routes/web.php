<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');

        Route::get('/register', 'viewRegistration')->name('registration');
        Route::post('/register', 'saveRegistration')->name('registration.save');

        Route::get('/login', 'viewLogin')->name('login');
        Route::post('/login', 'loginAuthentication')->name('login.auth');
    });
    Route::prefix('category')->controller(CategoryController::class)->group(function () {
        Route::get('/public-info', 'publicInfo')->name('category.public.info');
        Route::get('/real-estate', 'realEstate')->name('category.real.estate');
        Route::get('/matrimonial', 'matrimonial')->name('category.matrimonial');
        Route::get('/vehicle', 'vehicle')->name('category.vehicle');
        Route::get('/education', 'education')->name('category.education');
        Route::get('/tours-and-travels', 'tourTravel')->name('category.tour.travel');
        Route::get('/hotels-and-restaturants', 'hotelRestaurant')->name('category.hotel.restaurant');
        Route::get('/shopping', 'shopping')->name('category.shopping');
        Route::get('/professionals', 'professional')->name('category.professional');
        Route::get('/jobs', 'job')->name('category.job');
        Route::get('/constructions', 'construction')->name('category.construction');
        Route::get('/health-and-hospitals', 'healthHospital')->name('category.health.hospital');
        Route::get('/services', 'service')->name('category.service');
    });
    Route::prefix('ads')->controller(CategoryController::class)->group(function () {
        Route::get('/{category}/{id}/{slug}', 'realEstateDetail')->name('category.real.estate.detail');
    });
});
Route::middleware(['web', 'auth'])->group(function () {
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });
    Route::prefix('/post/ad')->controller(AdController::class)->group(function () {
        Route::get('/realestate', 'viewFormRealEstate')->name('post.ad.real.estate');
        Route::post('/realestate', 'saveAdRealEstate')->name('post.ad.real.estate.save');
        Route::get('/matrimonial', 'viewFormMatrimonial')->name('post.ad.matrimonial');
        Route::post('/matrimonial', 'saveAdMatrimonial')->name('post.ad.matrimonial.save');
    });
});
