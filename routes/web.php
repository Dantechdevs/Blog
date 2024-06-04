<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Posts
Route::group(['prefix' => 'posts' , 'as' => 'posts.'],function(){
    
    Route::get( '/' , [PostController::class, 'index'])->name('index');
    Route::get( 'create' , [PostController::class, 'create'])->name('create');
    Route::post( '/' , [PostController::class, 'store'])->name('store');
    Route::get( '/' , [PostController::class, 'index'])->name('index');

});
