<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CasteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebController;
use App\Http\Middleware\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/applogin', 'appLogin')->name('app.login');
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/emergency-contact', 'econtact')->name('econtact');

        Route::get('/register', 'viewRegistration')->name('registration');
        Route::post('/register', 'saveRegistration')->name('registration.save');

        Route::get('/login', 'viewLogin')->name('login');
        Route::post('/login', 'loginAuthentication')->name('login.auth');

        Route::get('/forgot', 'forgotPassword')->name('forgot.password');
        Route::post('/forgot', 'forgotPasswordFetch')->name('forgot.password.fetch');
        Route::get('/reset', 'resetPassword')->name('reset.password');
        Route::post('/reset', 'resetPasswordUpdate')->name('reset.password.update');

        Route::get('/privacy-policy', 'privacyPolicy')->name('privacy.policy');
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
        Route::get('real-estate/{id}/{slug}', 'realEstateDetail')->name('category.real.estate.detail');
        Route::get('matrimonial/{id}/{slug}', 'matrimonialDetail')->name('category.matrimonial.detail');
        Route::get('shopping/{id}/{slug}', 'shoppingDetail')->name('category.shopping.detail');
    });
});

Route::middleware(['web', 'auth'])->group(function () {
    Route::middleware('user-roles:' . serialize(array('user', 'admin', 'agent', 'executive')))->group(function () {
        Route::prefix('ajax')->controller(AjaxController::class)->group(function () {
            Route::get('/get/ddl', 'getDropDown')->name('get.ddl');
        });
        Route::controller(WebController::class)->group(function () {
            Route::get('/logout', 'logout')->name('logout');
            Route::get('/delete/my/account', 'deleteMyAccount')->name('delete.my.account');
        });
        Route::prefix('post/ad')->controller(AdController::class)->group(function () {
            Route::get('/realestate', 'viewFormRealEstate')->name('post.ad.real.estate');
            Route::post('/realestate', 'saveAdRealEstate')->name('post.ad.real.estate.save');
            Route::get('/matrimonial', 'viewFormMatrimonial')->name('post.ad.matrimonial');
            Route::post('/matrimonial', 'saveAdMatrimonial')->name('post.ad.matrimonial.save');
            Route::get('/shopping', 'viewFormShopping')->name('post.ad.shopping');
            Route::post('/shopping', 'saveAdShopping')->name('post.ad.shopping.save');

            Route::get('/edit/{id}', 'editAd')->name('ad.edit');

            Route::post('/realestate/update/{id}', 'updateAdRealEstate')->name('post.ad.real.estate.update');
            Route::post('/matrimonial/update/{id}', 'updateMatrimonial')->name('post.ad.matrimonial.update');
            Route::post('/shopping/update/{id}', 'updateShopping')->name('post.ad.shopping.update');
        });
        Route::prefix(Auth::user()->role ?? 'user')->controller(AdminController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
            Route::get('/listing', 'listing')->name('listing');
            Route::get('/profile', 'profile')->name('profile');
        });
    });

    Route::prefix('admin')->middleware('user-roles:' . serialize(array('admin')))->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/ad/delete/{id}', 'deleteAd')->name('ad.delete');
            Route::get('/ad/status/{id}', 'adStatus')->name('ad.status');
            Route::post('/ad/status/{id}', 'adStatusUpdate')->name('ad.status.update');
        });
        Route::controller(CasteController::class)->group(function () {
            Route::get('/caste', 'index')->name('caste.register');
            Route::get('/caste/create', 'create')->name('caste.create');
            Route::post('/caste/create', 'store')->name('caste.save');
            Route::get('/caste/edit/{id}', 'edit')->name('caste.edit');
            Route::post('/caste/edit/{id}', 'update')->name('caste.update');
            Route::get('/caste/delete/{id}', 'destroy')->name('caste.delete');
        });
    });
});
