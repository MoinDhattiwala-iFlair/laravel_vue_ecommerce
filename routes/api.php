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

        //product route start

        Route::get('product', 'ApiController@getProduct');
        Route::get('product/{product}', 'ApiController@findProduct');
        Route::post('product/', 'ApiController@storeProduct');
        Route::post('product/{product}', 'ApiController@updateProduct');
        Route::delete('product/{product}', 'ApiController@destroyProduct');

        //product route end            


        //post route start

        Route::get('post', 'ApiController@getPost');
        Route::get('post/{post}', 'ApiController@findPost');
        Route::get('post_detail/{post}', 'ApiController@postDetail');
        Route::post('post/', 'ApiController@storePost');
        Route::post('post/{post}', 'ApiController@updatePost');
        Route::delete('post/{post}', 'ApiController@destroyPost');
        Route::post('post/{post}/comment', 'ApiController@storePostComment');
        Route::post('comment/{comment}', 'ApiController@updatePostComment');
        Route::delete('comment/{comment}', 'ApiController@destroyPostComment');

        //post route end         


        //Helper route start

        Route::post('/globalaction', 'HelperController@index');

        //Helper route end


    });
});
