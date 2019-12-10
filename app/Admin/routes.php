<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->get('/settings', 'SettingController@editSetting')->name('admin.settings');
    $router->put('settings/{setting}', 'SettingController@update')->name('admin.settings.update');

});
