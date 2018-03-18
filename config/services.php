<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => norteinformativo\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
        'client_id' => '998736317019-3ppmvm5abgopj4vovfof7ddkoui22oac.apps.googleusercontent.com',
        'client_secret' => 'A8_jcego1-ubuhSQcgt_Qv8S',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '2133267873609251',
        'client_secret' => '79e7459d0000e8c94ba5554087a671af',
        'redirect' => 'http://127.0.0.1:8000/auth/facebook/callback',
    ],
    'twitter' => [
        'client_id' => 'Gj5axK1dwbJPZSUv1SsmZTZfx',
        'client_secret' => 'CGUWkvRbx3TMTwzlO5JU3tM3MZu2H6M65i2SE8AQ4fmaR8XiKK',
        'redirect' => 'http://127.0.0.1:8000/auth/twitter/callback',
    ],
];
