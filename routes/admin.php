<?php
Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {
    //'middleware' => 'auth:admin' ==>>检查后台登录权限
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::resource('index', 'IndexController', ['only' => ['index']]);
        Route::resource('course', 'CourseController', ['only' => ['index']]);
        //设置
        Route::resource('setting', 'SettingController', ['only' => ['index']]);
        //后台-管理员
        Route::resource('administrator', 'AdministratorController', ['only' => ['index', 'store', 'update', 'edit', 'destroy']]);

        //后台-管理员角色
        Route::resource('administrator_role', 'AdministratorRoleController', ['only' => ['index', 'store', 'update', 'edit', 'destroy']]);
        //角色授权
        Route::post('administrator_role/permission', 'AdministratorRoleController@permission')->name('administrator_role.permission');

        //后台-管理员权限
        Route::resource('administrator_permission', 'AdministratorPermissionController', ['only' => ['index', 'store', 'update', 'edit', 'destroy']]);

        //后台-管理员权限
        Route::resource('administrator_menu', 'AdministratorMenuController', ['only' => ['index', 'store', 'update', 'edit', 'destroy']]);
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