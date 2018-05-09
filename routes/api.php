<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Product REST routes
 */
Route::apiResource('products', 'ProductController');

/**
 * review REST routes
 */
Route::group(['prefix' => 'products'], function(){
    Route::apiResource('/{product}/reviews', 'ReviewController');
});

