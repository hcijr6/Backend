<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('order', 'OrderCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('provider', 'ProviderCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('order_line', 'Order_lineCrudController');
    Route::get('order_line/{id}', 'Order_lineCrudController@idOrder')->name('orderlineid');
}); // this should be the absolute last line of this file