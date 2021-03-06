<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sandbox Mode
    |--------------------------------------------------------------------------
    */
    'sandbox' => env('PAGSEGURO_SANDBOX', true),

    /*
    |--------------------------------------------------------------------------
    | Access info
    |--------------------------------------------------------------------------
    */
    'email' => env('PAGSEGURO_EMAIL', ''),
    'token' => env('PAGSEGURO_TOKEN', ''),
];
