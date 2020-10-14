<?php

Route::group(['middleware' => ['web','role:settings.access'], 'prefix' => 'settings','as'=>'settings.', 'namespace' => 'Modules\Platform\Settings\Http\Controllers'], function () {

    Route::get('outgoing_server', ['as' => 'outgoing_server', 'uses' => 'OutgoingServerController@index']);
    Route::post('outgoing_server', ['as' => 'outgoing_server', 'uses' => 'OutgoingServerController@store']);
    Route::get('outgoing_server_refresh_cache', ['as' => 'outgoing_server_refresh_cache', 'uses' => 'OutgoingServerController@refreshSettingsCache']);
    Route::post('outgoing_server_test_email', ['as' => 'outgoing_server_test_email', 'uses' => 'OutgoingServerController@sendTestEmail']);

    Route::resource('language', 'LanguageController');

    Route::resource('currency', 'CurrencyController', []);

    Route::resource('tax', 'TaxController', []);


    Route::resource('dateformat', 'DateformatController', []);

    Route::resource('timeformat', 'TimeformatController', []);

    Route::resource('timezone', 'TimeZoneController', []);
});

Route::group(['middleware' => ['web','permission:account.settings'], 'prefix' => 'settings','as'=>'settings.', 'namespace' => 'Modules\Platform\Settings\Http\Controllers'], function () {

    Route::get('/', ['as' => 'index', 'uses' => 'SettingsController@index']);

    Route::resource('tags', 'TagsController', []);

    Route::resource('email_templates', 'EmailTemplateController', []);


    Route::get('account_settings', ['as' => 'account_settings', 'uses' => 'AccountSettingsController@index']);
    Route::post('account_settings', ['as' => 'account_settings', 'uses' => 'AccountSettingsController@store']);
    Route::get('display', ['as' => 'display', 'uses' => 'DisplayController@index']);
    Route::post('display', ['as' => 'display', 'uses' => 'DisplayController@store']);

});


