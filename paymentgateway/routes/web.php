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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('index', 'PayPalController@index');
// Route::get('payment', 'PayPalController@payment')->name('payment');
// Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
// Route::get('payment/success', 'PayPalController@success')->name('payment.success');


Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PayPalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'PayPalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PayPalController@getPaymentStatus',));
