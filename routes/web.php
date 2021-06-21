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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('home');
Route::get('/contact', 'HomeController@contact')->name('home');
Route::get('/aboutUs', 'HomeController@aboutUs')->name('home');
Route::get('/gallery', 'HomeController@gallery')->name('home');
Route::get('/feedback', 'HomeController@feedback')->name('home');
Route::post('/submitFeedback','FeedbackController@submit');
Route::get('/roomSearch','RoomController@index');
// Just to validate the link


Route::post('/roomAvailable','RoomController@vacantRoom');
Route::post('/viewDetail','RoomController@viewDetail');

Route::post('/directBookingRequest','BookingRoomController@directBookingRequest');
Route::post('/indirectBookingRequest','BookingRoomController@indirectBookingRequest');
Route::post('/bookingConfirmation','BookingRoomController@bookingConfirmation');
Route::get('/myBookings','BookingRoomController@myBookings');


// I have to validate all the get request also
Route::get('/roomAvailable','RoomController@roomAvailable');
Route::get('/viewDetail','RoomController@viewDetailRoom');
Route::get('/directBookingRequest','BookingRoomController@directBooking');
Route::get('/indirectBookingRequest','BookingRoomController@indirectBooking');
Route::get('/bookingConfirmation','BookingRoomController@bookingConfirm');

// Now we are going to work upon Super Admin module 
// Whatever we have done here please remember all the controller must be validated through role base 
// who is responsible for the following thing
// 1. Home page :- This page will display
                    // How many lodges/hotels have onboarded on glodge
                    // Inside it, how many rooms have been registered
                    // Almost all the details that the lodges can have
                    
// 2. Onboarding :- Here we will display the page so that we can register some lodge/Hotel.
Route::get('/superadmin/home','SuperAdminController@index');
Route::get('/superadmin/onboarding','SuperadminController@onboardingRedirect');
Route::post('/superadmin/onboardingAdmin','SuperadminController@onboardingAdmin');
Route::get('/superadmin/changeStatus/{id}','SuperadminController@changeStatus');
Route::get('/superadmin/viewDetail/{id}','SuperadminController@viewDetail');
Route::get('/superadmin/feedback','SuperadminController@feedback');
Route::post('/superadmin/feedback/reply','SuperadminController@feedbackReply');
Route::get('/superadmin/queries','SuperadminController@queries');


// Now here we are working on Admin module
Route::get('/admin/home','AdminController@index');
Route::get('/admin/bookingHistory','AdminController@bookingHistory');
Route::get('/admin/cancelBooking/{id}','AdminController@cancelBooking');
Route::get('/admin/masterData','AdminController@masterData');
Route::get('/admin/changeStatus/{id}','AdminController@changeStatus');

Route::get('/admin/updateProfileRedirect','AdminController@updateProfileRedirect');
Route::post('/admin/updateProfile','AdminController@updateProfile');
Route::get('/admin/feedback','AdminController@feedback');
Route::post('/admin/submitFeedback','AdminController@submitFeedback');
Route::get('/admin/defaultPage','AdminController@defaultPage');

// Admin- MasterData module
Route::get('/admin/masterData/lodge/addLodgeFacilities','MasterDataController@addLodgeFacilitiesRedirect');
Route::post('/admin/masterData/lodge/addLodgeFacilities','MasterDataController@addLodgeFacilities');

Route::get('/admin/masterData/lodge/removeLodgeFacilities','MasterDataController@removeLodgeFacilitiesRedirect');
Route::post('/admin/masterData/lodge/removeLodgeFacilities','MasterDataController@removeLodgeFacilities');

Route::get('admin/masterData/lodge/changeLodgeFacilities','MasterDataController@changeLodgeFacilitiesRedirect');
Route::post('admin/masterData/lodge/changeLodgeFacilities','MasterDataController@changeLodgeFacilities');

Route::get('admin/masterData/roomCategory/addRoomCategories','MasterDataController@addRoomCategoriesRedirect');
Route::post('admin/masterData/roomCategory/addRoomCategories','MasterDataController@addRoomCategories');

Route::get('admin/masterData/roomCategory/updateRoomCategories','MasterDataController@updateRoomCategoriesRedirect');
Route::post('admin/masterData/roomCategory/updateRoomCategories','MasterDataController@updateRoomCategories');

Route::get('admin/masterData/roomFacility/addRoomFacilities','MasterDataController@addRoomFacilitiesRedirect');
Route::post('admin/masterData/roomFacility/addRoomFacilities','MasterDataController@addRoomFacilities');

Route::get('admin/masterData/room/addRoom','MasterDataController@addRoomRedirect');
Route::post('admin/masterData/room/addRoom','MasterDataController@addRoom');

Route::get('admin/masterData/room/deleteRoom','MasterDataController@deleteRoomRedirect');
Route::post('admin/masterData/room/deleteRoom','MasterDataController@deleteRoom');

Route::get('admin/masterData/room/updateRoom','MasterDataController@updateRoomRedirect');
Route::post('admin/masterData/room/updateRoom','MasterDataController@updateRoom');
// Using Ajax we try to get the list of room according to room_category
// Route::post('getRoomList',[AjaxController::class,'getRoomList']);
// Route::post('admin/masterData/room/getRoomList','MasterDataController@getRoomList');
Route::post('admin/masterData/room/getRoom', 'MasterDataController@getRoom');