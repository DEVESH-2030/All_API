<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    // 'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    // 'sandbox' => [

    //     'username'    => env('PAYPAL_SANDBOX_API_USERNAME', ''),
    //     'password'    => env('PAYPAL_SANDBOX_API_PASSWORD', ''),
    //     'secret'      => env('PAYPAL_SANDBOX_API_SECRET', ''),
    //     'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
    //     'app_id'      => 'APP-80W284485P519543T',
    // ],
    // 'live' => [

    //     'username'    => env('PAYPAL_LIVE_API_USERNAME', ''),
    //     'password'    => env('PAYPAL_LIVE_API_PASSWORD', ''),
    //     'secret'      => env('PAYPAL_LIVE_API_SECRET', ''),
    //     'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE', ''),
    //     'app_id'      => 'APP-80W284485P519543T',
    // ],

    // 'payment_action' => 'Sale',
    // 'currency'       => env('PAYPAL_CURRENCY', 'INR'),
    // 'billing_type'   => 'MerchantInitiatedBilling',
    // 'notify_url'     => '',
    // 'locale'         => 'http://localhost/paymentgateway/public/index',
    // 'validate_ssl'   => false,



    'client_id' => 'AS_fKRLPWHXy1NUrmZtFsmur7_dTcJ5WhR5dllguhVUsA5x3xcIosO9pt9O_85B2SZVg1LZY8W6ykCh8',
    'secret' => 'EJxBxONhcGIZuYOhDUlNIrVKEtGT2aCiGVhR_OBwUPSg7EeCjsk9Bk-SHMakKErwCeiwwa1Vw_IUUDPs',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];
