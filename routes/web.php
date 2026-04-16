<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');
