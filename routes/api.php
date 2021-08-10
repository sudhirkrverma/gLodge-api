<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register','API\AuthController@register');
Route::post('login','API\AuthController@login');
Route::get('logout','API\AuthController@logout')->middleware('auth:api');

Route::apiResource('lodge','API\LodgeController')->middleware('auth:api');
Route::apiResource('booking_room','API\BookingRoomController')->middleware('auth:api');
Route::apiResource('room_search','API\RoomSearchController')->middleware('auth:api');
Route::apiResource('privacy_policy','API\PrivacyPolicyController')->middleware('auth:api');
Route::apiResource('mybookings','API\MyBookingController')->middleware('auth:api');
Route::apiResource('cancelBooking','API\BookingStatusController')->middleware('auth:api');
Route::apiResource('contact','API\LodgeController')->middleware('auth:api');
// Route::apiResource('mybooking_status','API\BookingStatusController')->middleware('auth:api');

// Admin Panel
Route::apiResource('pending_request','API\Admin\PendingRequestController')->middleware('auth:api');
Route::apiResource('confirm_booking','API\Admin\ConfirmBookingController')->middleware('auth:api');
Route::apiResource('booking_status','API\Admin\BookingStatusController')->middleware('auth:api');
Route::apiResource('cancelled_booking','API\Admin\CancelledBookingController')->middleware('auth:api');