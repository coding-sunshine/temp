<?php

Route::group(['middleware' => ['web','permission:settings.access'], 'prefix' => 'settings','as'=>'settings.', 'namespace' => 'Modules\Platform\User\Http\Controllers'], function () {

    Route::resource('roles', 'Roles\RolesController', []);
});

Route::group(['middleware' => ['web','permission:account.settings'], 'prefix' => 'settings','as'=>'settings.', 'namespace' => 'Modules\Platform\User\Http\Controllers'], function () {
    Route::resource('users', 'User\UserController', []);

    Route::get('/users/ghost-login/{identifier}', ['as' => 'users.login-as', 'uses' => 'User\UserGhostLoginController@login']);
    Route::post('/users/change-password/{identifier}', ['as' => 'users.change-password', 'uses' => 'User\UserChangePasswordController@changePassword']);
    Route::get('/users/activity/{identifier}', ['as' => 'users.activity', 'uses' => 'User\UserActivityController@activity']);

    Route::resource('groups', 'GroupsController', []);
});

