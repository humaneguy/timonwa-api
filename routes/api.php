<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/website-reviews', function () {
    return response()->file(app_path('../' . 'responses.json'));
});

Route::get('/agents', function (){
        return response()->file(app_path('../' . 'agents.json'));
});

Route::get('/posts', function (){
    return response()->file(app_path('../' . 'posts.json'));
});

