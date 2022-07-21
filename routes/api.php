<?php

use App\Http\Controllers\Api\AuthController;
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

// Route::post('/register', )

Route::group(['prefix' => 'v1'], function () {

    // Route::post('/register', [AuthController::class, 'store']);
    Route::post('/login', [AuthController::class, 'login']);


    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::get('/test', function (Request $request) {
            $response = [
                $request->user(),
            ];
            return response($response, 200);
        });
        Route::post('/logout', [AuthController::class, 'logout']);
    });
});
