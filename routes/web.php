<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\AutController;

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

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::post('/signin', [AutController::class, 'signin']);

Route::post('/register', [AutController::class, 'register'])->name('saveuser');

Route::get('logout', [AutController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth', 'prefix' => 'user', 'before' => 'user'], function () {

    Route::get('/profile', [PageController::class, 'profile'])->name('userprofile');

    Route::post('update-profile/{id}', [AutController::class, 'updateprofile'])->name('updateprofile');

    Route::get('/verify-email', [PageController::class, 'verify']);

    Route::get('/activatesystemuser/{id}', [PageController::class, 'activatesystemuser'])->name('activatesystemuser');

    Route::post('/save-videos-ikes', [PageController::class, 'like'])->name('videoslike');

    Route::post('/save-videos', [PageController::class, 'videoupload'])->name('savevideo');

    Route::get('delete-video/{id}', [PageController::class, 'deletevideo'])->name('deletevideo');

    Route::get('video-url/{id}', [PageController::class, 'videourl'])->name('videourl');

    Route::post('/update-password', [AutController::class, 'updatePassword'])->name('user.update-password');

});
