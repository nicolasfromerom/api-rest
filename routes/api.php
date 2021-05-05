<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/post',  App\Http\Controllers\Api\V1\PostController::class)
    ->only(['index','show','destroy']);