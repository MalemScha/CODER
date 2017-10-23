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
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '1609950035699385',
    'client_secret' => '601305d09f0cf81728ea61173b93ebab',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    'twitter' => [
    'client_id' => 'fnYEAZXDgRoPTTQcpPeMlossK',
    'client_secret' => 'LvbNEKunxqkMKd0sEQB0rVPh7ZGs4J20MWMvrtwLUvqsHv7hqF',
    'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

    'github' => [
    'client_id' => 'd5d21a22c5ab52369fcb',
    'client_secret' => '6958b04dea0b065797a56dc08c5159236a6316b1',
    'redirect' => 'http://localhost:8000/auth/github/callback',
],

];
