<?php


// use App\Http\Controllers\Api\Auth\AuthController;
// use App\Http\Controllers\Api\Auth\ProfileController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });





// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::group(['middleware' => ['api','cors'], 'namespace' => 'Api'], function ($router) {
//     // user login
//     Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function () {
//         Route::post('register', [AuthController::class, 'signup']);
//         Route::post('login', [AuthController::class, 'login']);
//         Route::post('password-update', [ProfileController::class, 'update']);
//         Route::post('avatar-update', [ProfileController::class, 'avatarImageUpdate']);
//         Route::post('forget-password-request', [ProfileController::class, 'forgetPassword']);
//         //have any?//
//     });

//     Route::group(['middleware' => ['auth:api', 'cors']], function () {
//         //driving method
//         Route::group(['namespace' => 'Driver', 'prefix' => 'driver'], function () {
//             Route::post('get-live-data', [StartDrivingController::class, 'getLiveData']);
//             Route::post('driver-is-moving', [StartDrivingController::class, 'driverIsMoving']);
//             Route::post('history', [DriverHistoryController::class, 'drivingHistory']);
//             Route::post('history-details', [DriverHistoryController::class, 'drivingHistoryDetails']);
//             Route::post('summary', [DriverHistoryController::class, 'driverSummary']);
//             Route::get('inbox/{id}', [DriverHistoryController::class, 'inbox']);
//             Route::get('notification/{id}', [DriverHistoryController::class, 'notification']);
//             Route::post('driver-profile', [ProfileController::class, 'profile']);
//             Route::post('list-view', [DriverController::class, 'getAllDriver']);
//             Route::post('vehicles', [DriverController::class, 'getDriverVehicles']);
//             Route::post('payment-history', [PaymentController::class, 'getDriverPayment']);
//         });
//     });

//     //setting & information route
//     Route::get('privacy-policy',[SettingController::class,'privacyPolicy']);
//     Route::get('terms-condition',[SettingController::class,'termsCondition']);
//     Route::get('base-setting',[SettingController::class,'baseSetting']);

// });