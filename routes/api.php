<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;
use App\Http\Controllers\Api\LoginController;
//v1
Route::apiResource('v1/post',PostV1::class)
    ->only(['index','show','destroy'])
    ->middleware('auth:sanctum');
//v2
Route::apiResource('v2/post',PostV2::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::post('login',[
    LoginController::class,
    'login'
    ]
);