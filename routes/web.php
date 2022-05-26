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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'listing one',
                'company' => 'listing one description is here in dummy text',
            ],
            [
                'id' => 1,
                'title' => 'listing one',
                'company' => 'listing one description is here in dummy text',
            ]
        ],
    ]);
});

Route::get('/listing', function () {
    return view('listing');
});
