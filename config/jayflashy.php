<?php

return [

    /**
     * Public Key From Paystack Dashboard
     *
     */
    'appName' => getenv('APP_NAME'),

    /**
     * Secret Key From Paystack Dashboard
     *
     */
    'appUrl' => getenv('APP_URL'),

    'request_logger' => [
        'enabled' => true,
    ],
];