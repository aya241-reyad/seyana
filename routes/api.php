<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\MainController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function () {

    
    Route::post('login',[AuthController::class,'login']);
   Route::group(['middleware'=>'auth:api'],function(){
    Route::post('register',[AuthController::class,'register']);
        Route::post('profile',[AuthController::class,'profile']);
        Route::get('services',[MainController::class,'getService']);
        Route::get('sub_services',[MainController::class,'getSunServices']);
        Route::get('categories',[MainController::class,'index']);
        Route::post('orders',[MainController::class,'order']);
        Route::post('complete_order',[MainController::class,'appointment']);
        Route::get('orders',[MainController::class,'listOrders']);
        Route::post('rate_app',[MainController::class,'rate']);

    }) ;

});
