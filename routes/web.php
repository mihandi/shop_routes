<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',                                     'HomeController@index')->name('home');

Route::get('/products',                                 'ProductController@index');
Route::get('/product-reviews/{id}',                     'ProductReviewsController@index');

Route::group(['middleware' => ['auth']], function () {

    Route::post('/products',                            'ProductController@store');
    Route::delete('/products/{id}',                     'ProductController@destroy');

    Route::put('products/{id}/main-image',              'ProductImageController@update');

    Route::post('order/create',                         'OrderController@store');

    Route::put('wishlist/add-product/{id}',             'WhishListController@update');

    Route::post('product-reviews/{id}/create',          'ProductReviewsController@store');

    Route::post('product-reviews/{id}/like',            'ProductReviewsLikeController@store');
    Route::post('product-reviews/{id}/dislike',         'ProductReviewsDisLikeController@store');

    Route::get('/payment',                              'CheckoutController@index');

    Route::get('payment/apple-pay',                     'ApplePayController@index');
    Route::post('payment/apple-pay',                    'ApplePayController@store');

    Route::get('payment/stripe',                        'StripeController@index');
    Route::post('payment/stripe',                       'StripeController@store');

    Route::get('payment/paypal',                        'PaypalController@index');
    Route::post('payment/paypal',                       'PaypalController@store');
});
