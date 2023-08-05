<?php

use App\Http\Controllers\API\DataPopController;
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

Route::get('pop',[DataPopController::class,'all']);
Route::post('pop',[DataPopController::class,'add']);
Route::post('edit-pop',[DataPopController::class,'update']);
