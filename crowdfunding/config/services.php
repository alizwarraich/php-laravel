<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '752791590104-kj1sgdltc843f66h95si69lk4095522t.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/callback/google'
    ],

    'facebook' => [
        'client_id' => '1246980426108739',
        'client_secret' => 'e0fde6c9487aedeb19e13652ed75daf5',
        'redirect' => 'http://localhost:8000/callback/facebook'
    ]

];
