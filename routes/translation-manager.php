<?php

use Backpack\TranslationManager\Http\Controllers\TranslationManagerCrudController;

/*
|--------------------------------------------------------------------------
| Backpack\TranslationManager Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are
| handled by the Backpack\TranslationManager package.
|
*/
Route::group([
    'prefix' => config('hncore.base.route_prefix', 'admin'),
    'middleware' => ['web', config('hncore.base.middleware_key', 'admin')],
], function () {
    Route::crud('translation-manager', TranslationManagerCrudController::class);
});
