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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['middleware' => 'bindings'], function ($api) {
    $api->get('submissions', 'App\Http\Controllers\SubmissionController@index');
    $api->get('submissions/{submission}', 'App\Http\Controllers\SubmissionController@show');
    $api->post('submissions', 'App\Http\Controllers\SubmissionController@store');
    $api->patch('submissions/{submission}', 'App\Http\Controllers\SubmissionController@update');
    $api->delete('submissions/{submission}', 'App\Http\Controllers\SubmissionController@destroy');
});
