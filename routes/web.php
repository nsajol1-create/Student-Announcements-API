<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AnnouncementAdminController;
use App\Http\Controllers\Admin\AdminAuthController;

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/

// Show login form
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');

//Choices for Login
Route::get('/', [AdminAuthController::class, 'studentLogin'])->name('choices');

Route::get('/student/login', [AdminAuthController::class, 'student'])->name('student');
Route::get('/student/home', [AdminAuthController::class, 'studentHome'])->name('studentHome');
Route::get('/student/annoucement', [AnnouncementAdminController::class, 'studentshow'])->name('studentAnnounce');
Route::get('/student/developers', [AdminAuthController::class, 'studentDevelopers'])->name('studentDevelopers');
Route::get('/student/contact', [AdminAuthController::class, 'studentContact'])->name('studentContact');

// Handle login POST
Route::post('/admin/login', [AdminAuthController::class, 'login']);

// Handle logout
Route::post('/admin/logout', function () {
    Auth::logout();
    return redirect()->route('admin.login');
})->name('admin.logout');


/*
|--------------------------------------------------------------------------
| Admin Protected Routes (Require Authentication + Admin Role)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [AnnouncementAdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/developers', [AnnouncementAdminController::class, 'developers'])->name('admin.developers.dev');
    Route::get('/contact', [AnnouncementAdminController::class, 'contact'])->name('admin.contactus');

    // Create announcement
    Route::get('/announcements/create', [AnnouncementAdminController::class, 'create'])->name('admin.announcements.create');
    Route::get('/announcements/createannoucement', [AnnouncementAdminController::class, 'createannoucement'])->name('admin.announcements.creates');
    Route::post('/announcements', [AnnouncementAdminController::class, 'store'])->name('admin.announcements.store');

    //Show announcement
   Route::get('/admin/announcements/show', [AnnouncementAdminController::class, 'show'])
    ->name('admin.announcements.show');


    // Edit announcement
    Route::get('/announcements/{id}/edit', [AnnouncementAdminController::class, 'edit'])->name('admin.announcements.edit');
    Route::put('/announcements/{id}', [AnnouncementAdminController::class, 'update'])->name('admin.announcements.update');

    // Delete announcement
    Route::delete('/announcements/{id}', [AnnouncementAdminController::class, 'destroy'])->name('admin.announcements.destroy');
});
