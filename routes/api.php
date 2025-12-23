<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AnnouncementController;
use App\Http\Controllers\Admin\AdminAuthController;

Route::get('/announcements', [AnnouncementController::class, 'index']);
Route::post('/announcements', [AnnouncementController::class, 'store']);
Route::get('/announcements/archive', [AnnouncementController::class, 'archive']);
Route::delete('/announcements/{id}', [AnnouncementController::class, 'destroy']);

// Admin Only
/*
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/announcements', [AnnouncementController::class, 'store']);
    Route::put('/announcements/{id}', [AnnouncementController::class, 'update']);
    Route::delete('/announcements/{id}', [AnnouncementController::class, 'destroy']);
});
*/

Route::post('/admin/login', [AdminAuthController::class, 'apiLogin']);
