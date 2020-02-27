<?php
Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {
    //'middleware' => 'auth:admin' ==>>检查后台登录权限
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::resource('index', 'IndexController', ['only' => ['index']]);
        Route::resource('form', 'FormController', ['only' => ['index']]);
        Route::resource('setting', 'SettingController', ['only' => ['index']]);
        Route::resource('user', 'UserController', ['only' => ['index']]);
        Route::resource('video', 'VideoController', ['only' => ['index']]);
    });

    //登录路由
    Route::get('login', 'LoginController@login')->name('login');
    //退出路由
    Route::get('logout', 'LoginController@logout')->name('logout');
    //登录Api
    Route::post('loginRequest', 'LoginController@loginRequest')->name('loginRequest');

    Route::get('register', 'LoginController@register')->name('register');
});