<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\APIsanphamController;
use App\Http\Controllers\APIuserController;

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
route::get('SanPham', [APIsanphamController::class,'index']);
route::get('SanPham/giay', [APIsanphamController::class,'chonGiay']);
route::get('SanPham/ao', [APIsanphamController::class,'chonAo']);
route::get('SanPham/trangsuc', [APIsanphamController::class,'chonTrangSuc']);
route::get('SanPham/tui', [APIsanphamController::class,'chonTui']);
route::get('User', [APIuserController::class,'index']);
route::post('User/register',[APIuserController::class,'register']);
route::post('User/login',[APIuserController::class,'login']);
route::get('User/user',[APIuserController::class,'user']);
route::post('User/logout',[APIuserController::class,'logout']);
route::post('User/update/{User}',[APIuserController::class,'update']);
route::post('User/changepass/{User}',[APIuserController::class,'changepass']);
route::post('User/forgotpass',[APIuserController::class,'forgotpass']);