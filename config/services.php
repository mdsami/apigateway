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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'cms' => [
        'base_uri' => env('CMS_SERVICE_BASE_URL'),
        'secret' => env('CMS_SERVICE_SECRET'),
    ],

    'admin' => [
        'base_uri' => env('ADMIN_SERVICE_BASE_URL'),
        'secret' => env('ADMIN_SERVICE_SECRET'),
    ],
    'citizen' => [
        'base_uri' => env('CITIZEN_SERVICE_BASE_URL'),
        'secret' => env('CITIZEN_SERVICE_SECRET'),
    ],

    'workflow' => [
        'base_uri' => env('WORKFLOW_SERVICE_BASE_URL'),
        'secret' => env('WORKFLOW_SERVICE_SECRET'),
    ],

    'application' => [
        'base_uri' => env('APPLICATON_SERVICE_BASE_URL'),
        'secret' => env('APPLICATON_SERVICE_SECRET'),
    ],

    'si' => [
        'base_uri' => env('SI_SERVICE_BASE_URL'),
        'secret' => env('SI_SERVICE_SECRET'),
    ],

    'generator' => [
        'base_uri' => env('GENERATOR_SERVICE_BASE_URL'),
        'secret' => env('GENERATOR_SERVICE_SECRET'),
    ],



];
