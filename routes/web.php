<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SiController;
use Illuminate\Http\Request;
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

$router->group(['middleware' => 'client.credentials'], function () use ($router) {
    /**
     *  SI Services routes
     */
    Route::get('/nisc',[SiController::class,'index']);

});