<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\FriendRequestController;
use App\Http\Controllers\FriendRequestResponseController;

Route::middleware('auth:api')->group(function () {
    
    Route::get('/auth-user', [AuthUserController::class, 'show']);

    Route::apiResources([

        '/posts' => PostController::class,
        '/users' => UserController::class,
        '/users/{user}/posts' => PostController::class,
        '/friend-request' => FriendRequestController::class,
        '/friend-request-response' => FriendRequestResponseController::class,

    ]);
});
