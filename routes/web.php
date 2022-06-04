<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login',App\Http\Livewire\Auth\Login::class)->name('login');

Route::group(["middleware"=>"auth"],function(){
    Route::get('/users',App\Http\Livewire\User\Index::class)->name('users.index');
    // Route::get('/user/create',App\Http\Livewire\User\Create::class)->name('users.create');
    // Route::get('/user/update/{id}',App\Http\Livewire\User\Update::class)->name('users.update');
    // Route::get('/user/{id}',App\Http\Livewire\User\Show::class)->name('users.show');
});