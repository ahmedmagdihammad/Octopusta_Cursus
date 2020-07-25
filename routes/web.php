<?php

Auth::routes();

// Route Frontend-------------------------
// Login Frontend
Route::get('/', 'Frontend\SigninControllers@index');
Route::post('/signin', 'Frontend\SigninControllers@login')->name('signin');

// Register Frontend
Route::get('/signup', 'Frontend\SigninControllers@signup')->name('signup');
Route::post('/signup/create', 'Frontend\SigninControllers@create')->name('signup.create');

// Route Pages Frontend
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'Frontend\HomeController@index')->name('home');

    // Route View Courses
    Route::get('/{id}/live_output', 'Frontend\CoursesController@live_output')->name('live_output');
    Route::get('/{id}/course_detail_view', 'Frontend\CoursesController@course_detail_view')->name('course_detail_view');

    // Route Certification Center
    Route::get('/certification_center','Frontend\CertificatCenterController@certification_center')->name('certification_center');
    Route::get('/certification_start_form','Frontend\CertificatCenterController@certification_start_form')->name('certification_start_form');
    Route::get('/certification_test_view','Frontend\CertificatCenterController@certification_test_view')->name('certification_test_view');
});


// Route Backend----------------------------
// Login Backend
Route::get('/admin', 'Backend\SigninControllers@index')->name('admin');
Route::post('/admin/login', 'Backend\SigninControllers@login')->name('admin.login');

// Register Backend
Route::get('/admin/register', 'Backend\SigninControllers@register')->name('admin.register');
Route::post('/register/create', 'Backend\SigninControllers@create')->name('register.create');

// Route Pages Backend
Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');

    // Route Administration
    Route::get('/administration', 'Backend\AdministrationController@index')->name('administration');
    Route::post('/administration/{id}/edit', 'Backend\AdministrationController@update')->name('administration.edit');
    Route::post('/administration/{id}/delete', 'Backend\AdministrationController@destroy')->name('administration.delete');
    Route::get('/administration/{id}/active', 'Backend\AdministrationController@active')->name('administration.active');
    Route::get('/administration/{id}/deactive', 'Backend\AdministrationController@deactive')->name('administration.deactive');

    // Route Levels
    Route::get('/level', 'Backend\LevelsControllers@index')->name('level');
    Route::post('/level/store', 'Backend\LevelsControllers@store')->name('level.store');
    Route::post('/level/{id}/edit', 'Backend\LevelsControllers@update')->name('level.edit');
    Route::post('/level/{id}/delete', 'Backend\LevelsControllers@destroy')->name('level.delete');

    // Route Sessions
    Route::get('/session', 'Backend\SessionsControllers@index')->name('session');
    Route::post('/session/store', 'Backend\SessionsControllers@store')->name('session.store');
    Route::post('/session/{id}/edit', 'Backend\SessionsControllers@update')->name('session.edit');
    Route::post('/session/{id}/delete', 'Backend\SessionsControllers@destroy')->name('session.delete');
});