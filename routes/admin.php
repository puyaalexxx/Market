<?php
declare(strict_types=1);

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ParamController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductParentController;
use App\Http\Middleware\IsAdminMiddleware;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdminMiddleware::class]], function () {
    Route::resource('products', ProductController::class);
    Route::resource('product-parents', ProductParentController::class)->parameters(['product-parents' => 'productParents']);
    Route::resource('params', ParamController::class);
    Route::resource('categories', CategoryController::class);
});
