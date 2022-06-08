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

    /**
     *  Books routes
     */
    // $router->get('books', ['as' => 'books.index', 'uses' => 'BookController@index']);
    // $router->post('books', ['as' => 'books.store', 'uses' => 'BookController@store']);
    // $router->get('books/{book}', ['as' => 'books.show', 'uses' => 'BookController@show']);
    // $router->put('books/{book}', ['as' => 'books.update', 'uses' => 'BookController@update']);
    // $router->delete('books/{book}', ['as' => 'books.destroy', 'uses' => 'BookController@destroy']);

   
});
