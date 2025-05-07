<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Models\ChannelController;
use App\Models\SearchController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::controller(VideoController::class)->group(function (){
    Route::get('/', 'index')->name('home');
    Route::get('/video/{video}', 'show')->name('video');
    Route::get('/create', 'create')->middleware('auth')->name('createVideo');
    Route::post('/create', 'store')->middleware('auth');
    Route::get('/video/{video}/edit', 'edit')->middleware('auth')->can('authorize', 'video');
    Route::patch('/video/{video}', 'update')->middleware('auth')->can('authorize', 'video');
    Route::delete('/video/{video}', 'destroy')->middleware('auth')->can('authorize', 'video');
});

Route::controller(ChannelController::class)->group(function (){
    Route::get('/channel/{channel_slug}', 'index')->name('channel.home');
});

Route::get('/search', SearchController::class );

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/comment', [CommentController::class, 'store'])->name('comment.create');
});


require __DIR__.'/auth.php';


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
