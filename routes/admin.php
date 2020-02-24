<?php
Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::resource('index', 'IndexController', ['only' => ['index']]);
    Route::resource('form', 'FormController', ['only' => ['index']]);
    Route::resource('setting', 'SettingController', ['only' => ['index']]);
    Route::resource('user', 'UserController', ['only' => ['index']]);
    Route::resource('video', 'VideoController', ['only' => ['index']]);
});