<?php

use App\Http\Controllers\AuthController;
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

// jwt는 민감한 정보는 넣지 않음 
// 단방향 암호화를 하면 복호화를 하지 못함 
// 단방향 암호화 : 암호화를 수행하고 나온 데이터를 다시 원래의 데이터로 돌릴 수 없는 암호화 방식 =>  데이터의 무결성을 검증


// 모바일 앱은 세션을 유지하기 힘들기 때문에 jwt를 많이 사용하기도 함
Route::get('/token',[AuthController::class, 'issueToken']);
Route::get('/chk',[AuthController::class, 'chk']);