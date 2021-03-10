<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api'], function () {
    Route::post('login', 'ApiController@login');
    Route::post('register', 'ApiController@register');

    Route::middleware('auth:sanctum')->group(function () {
        
        //users route start

        Route::get('users', 'ApiController@users');
        Route::post('user/store', 'ApiController@storeUser');
        Route::get('user/{user}', 'ApiController@findUser');
        Route::post('user/{user}/update', 'ApiController@updateUser');
        Route::delete('user/{user}', 'ApiController@destroyUser');

        //users route end

        //category route start

        Route::get('category', 'ApiController@getCategory');
        Route::get('category/{category}', 'ApiController@findCategory');
        Route::post('category/', 'ApiController@storeCategory');
        Route::post('category/{category}', 'ApiController@updateCategory');
        Route::delete('category/{category}', 'ApiController@destroyCategory');

        //category route end

        //subcategory route start

        Route::get('subcategory', 'ApiController@getSubCategory');
        Route::get('subcategory/{subcategory}', 'ApiController@findSubCategory');
        Route::post('subcategory/', 'ApiController@storeSubCategory');
        Route::post('subcategory/{subcategory}', 'ApiController@updateSubCategory');
        Route::delete('subcategory/{subcategory}', 'ApiController@destroySubCategory');

        //subcategory route end
    });
});
