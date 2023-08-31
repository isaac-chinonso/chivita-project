<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\VideoController;
use App\Http\Controllers\Frontend\AutController;
use App\Http\Controllers\Frontend\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index']);

Route::get('/trending-moment', [PageController::class, 'video']);

Route::get('/trending-moment-video/{slug}', [PageController::class, 'videodetails'])->name('videodetails');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::post('/signin', [AutController::class, 'signin']);

Route::post('/register', [AutController::class, 'register'])->name('saveuser');

Route::get('logout', [AutController::class, 'logout'])->name('logout');

Route::get('/forget-password', [PageController::class, 'resetpassword'])->name('forget.password.get');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('/forget-password', [ResetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Route::post('/reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::post('/video/{video}/like', [VideoController::class, 'like'])->name('video.like');

Route::post('/video/{video}/unlike', [VideoController::class, 'unlike'])->name('video.unlike');


Route::group(['middleware' => 'auth', 'prefix' => 'user', 'before' => 'user'], function () {

    Route::get('/profile', [PageController::class, 'profile'])->name('userprofile');

    Route::post('update-profile/{id}', [AutController::class, 'updateprofile'])->name('updateprofile');

    Route::get('/verify-email', [PageController::class, 'verify']);

    Route::get('/activatesystemuser/{id}', [PageController::class, 'activatesystemuser'])->name('activatesystemuser');   

    Route::post('/save-videos', [PageController::class, 'videoupload'])->name('savevideo');

    Route::get('delete-video/{id}', [PageController::class, 'deletevideo'])->name('deletevideo');

    Route::get('video-url/{id}', [PageController::class, 'videourl'])->name('videourl');

    Route::post('/update-password', [AutController::class, 'updatePassword'])->name('user.update-password');

    Route::get("share-posts/{slug}", [AdminPostController::class, "sharePosts"]);
});
