<?php

Route::group(['middleware' => ['web','permission:settings.access'], 'prefix' => 'settings','as'=>'settings.', 'namespace' => 'Modules\Platform\Accounts\Http\Controllers'], function () {

    Route::resource('accounts', 'AccountController', []);

    Route::get('switch-context/{id}','AccountContextController@switchAccount')->name('accounts.switch-context');

    Route::get('drop-context', 'AccountContextController@dropContext')->name('accounts.drop-conext');

});
