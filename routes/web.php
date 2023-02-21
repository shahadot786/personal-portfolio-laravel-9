<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('frontend.index');
});

//Admin Route
Route::middleware('auth')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'Destroy')->name('admin.logout');
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');

        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });
});

//Home All Route
Route::middleware('auth')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home/slide', 'HomeSlider')->name('home.slide');
        Route::post('/update/slide', 'UpdateSlider')->name('update.slider');
    });
});

//About All Route
Route::middleware('auth')->group(function () {
    Route::controller(AboutController::class)->group(function () {
        Route::get('/about/page', 'AboutPage')->name('about.page');
        Route::post('/update/about', 'UpdateAbout')->name('update.about');
        Route::get('/about', 'HomeAbout')->name('home.about');
        //skill
        Route::get('/about/skill', 'AboutSkill')->name('about.skill');
        Route::get('/about/add/skill', 'AddSkill')->name('about.add_skill');
        Route::post('/store/skill', 'StoreSkill')->name('store.skill');
        Route::get('/edit/skill/{id}', 'EditSkill')->name('edit.skill');
        Route::post('/update/skill{id}', 'UpdateSkill')->name('update.skill');
        Route::get('/delete/skill/{id}', 'DeleteSkill')->name('delete.skill');
        //traning
        Route::get('/about/traning', 'AboutTraning')->name('about.traning');
        Route::get('/about/add/traning', 'AddTraning')->name('about.add_training');
        Route::post('/store/traning', 'StoreTraning')->name('store.traning');
        Route::get('/edit/traning/{id}', 'EditTraning')->name('edit.traning');
        Route::post('/update/traning{id}', 'UpdateTraning')->name('update.traning');
        Route::get('/delete/traning/{id}', 'DeleteTraning')->name('delete.traning');
        //education
        Route::get('/about/education', 'AboutEducation')->name('about.education');
        Route::get('/about/add/education', 'AddEducation')->name('about.add_education');
        Route::post('/store/education', 'StoreEducation')->name('store.education');
        Route::get('/edit/education/{id}', 'EditEducation')->name('edit.education');
        Route::post('/update/education{id}', 'UpdateEducation')->name('update.education');
        Route::get('/delete/education/{id}', 'DeleteEducation')->name('delete.education');
    });
});

//Product All Route
Route::middleware('auth')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product/view', 'ProductView')->name('product.view');
        Route::get('/product/add', 'AddProduct')->name('product.add');
    });
});

//Dashboard Route
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__ . '/auth.php';
