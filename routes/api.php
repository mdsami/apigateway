<?php


// use App\Http\Controllers\Api\Auth\AuthController;
// use App\Http\Controllers\Api\Auth\ProfileController;

use App\Http\Controllers\API\SiController;
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



$router->group(['middleware' => 'client_credentials'], function () use ($router) {
    /**
     *  SI Services routes
     */
    Route::get('/nisc',[SiController::class,'index']);

    Route::post('ubid',[SiController::class,'store']);



   
});
