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

Route::put('/sequences/all/transform', 'ElevatorRequestController@transformSequences');
Route::get('/requests', 'ElevatorRequestController@getAll');
Route::put('/elevators/all/turn-on', 'ElevatorController@turnOn');
Route::get('/elevators/{id}/status', 'ElevatorRequestController@getStatus');
Route::get('/floors', 'FloorsController@getAll');
