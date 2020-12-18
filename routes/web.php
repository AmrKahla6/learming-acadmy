<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front-end Routes
Route::group(['namespace' => 'Front'], function () {
    Route::get('/', 'HomepageController@index')->name('front.homepage');
    Route::get('/cat/{id}', 'CoursesController@cat')->name('front.cat');
    Route::get('/cat/{id}/course/{c_id}', 'CoursesController@show')->name('front.show');
    Route::get('/contact', 'ContactController@index')->name('front.contact');
    Route::post('/message/newsletter', 'MessageController@newsletter')->name('front.message.newsletter');
    Route::post('/message/contact', 'MessageController@contact')->name('front.message.contact');
    Route::post('/message/enroll', 'MessageController@enroll')->name('front.message.enroll');
});

// Dashboard Routes
Route::group(['namespace' => 'Admin' , 'prefix' => 'dashboard'], function () {
    Route::get('/login', 'AuthController@login')->name('admin.login');
    Route::post('/do-login', 'AuthController@doLogin')->name('admin.doLogin');

    Route::group(['middleware' => ['adminAuth:admin']], function () {
        Route::get('/logout', 'AuthController@logout')->name('admin.logout');
        Route::get('/', 'HomeController@index')->name('admin.home');
        Route::get('/', 'HomeController@index')->name('admin.home');

        // Categories Routes
        Route::resource('/cats', 'CatController')->except('show' , 'destroy');
        Route::get('/cats/delete/{id}', 'CatController@delete')->name('cat.delete');

        // Trainers Routes
        Route::resource('/trainers', 'TrainerController')->except('show' , 'destroy');
        Route::get('/trainers/delete/{id}', 'TrainerController@delete')->name('trainer.delete');
    });
});

