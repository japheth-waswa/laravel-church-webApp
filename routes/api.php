<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/**
Route::get('/sermons', [
    'as' => 'ApiSermons',
    'uses' => 'Api\ApiController@ApiSermon'
])->middleware('auth:api');**/
/**Route::get('/sermons', [
    'as' => 'ApiSermons',
    'uses' => 'Api\ApiController@ApiSermon'
])->middleware('auth:api');**/

Route::get('/sermons', [
    'as' => 'ApiSermons',
    'uses' => 'Api\ApiController@Sermon'
])->middleware('client_credentials');

Route::get('/sermon/{id}', [
    'as' => 'ApiSermon',
    'uses' => 'Api\ApiController@SermonSpecific'
])->middleware('client_credentials');

Route::get('/donations', [
    'as' => 'ApiDonations',
    'uses' => 'Api\ApiController@Donation'
])->middleware('client_credentials');

Route::get('/events', [
    'as' => 'ApiEvents',
    'uses' => 'Api\ApiController@Event'
])->middleware('client_credentials');

Route::get('/gallery', [
    'as' => 'ApiGallery',
    'uses' => 'Api\ApiController@Gallery'
])->middleware('client_credentials');

Route::get('/blogs', [
    'as' => 'ApiBlog',
    'uses' => 'Api\ApiController@Blog'
])->middleware('client_credentials');

Route::get('/schedules', [
    'as' => 'ApiSchedules',
    'uses' => 'Api\ApiController@sundaySchedule'
])->middleware('client_credentials');
