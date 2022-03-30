<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Zoom\MeetingController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function () {
    return [
        'result' => true,
    ];
});

// Get list of meetings.
Route::get('/meetings', [MeetingController::class, 'list']);

// Create meeting room using topic, agenda, start_time.
Route::post('/meetings', [MeetingController::class, 'create']);

// Get information of the meeting room by ID.
Route::get('/meetings/{id}', [MeetingController::class, 'get'])->where('id', '[0-9]+');

//update info of the meeting room
Route::patch('/meetings/{id}', [MeetingController::class, 'update'])->where('id', '[0-9]+');

//delete meeting room
Route::delete('/meetings/{id}', [MeetingController::class, 'delete'])->where('id', '[0-9]+');
