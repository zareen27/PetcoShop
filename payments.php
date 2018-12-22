<?php

return [
    // The default gateway name which configured in `gateways` section.
    'default_gateway' => 'paypal',

    // The default options for every gateways.
    'default_options' => [
        'test_mode' => true,
        // ...
    ],

    
    'gateways' => [
        'paypal' => [
            'driver' => 'PayPal_Express',
            'options' => [
                'username' => env('PAYPAL_USERNAME'),
                'password' => env('PAYPAL_PASSWORD'),
                'signature' => env('PAYPAL_SIGNATURE'),
                'test_mode' => env('PAYPAL_TEST_MODE'),
            ],
        ],
        // other gateways
    ],
];
