<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::middleware(['auth:sanctum', 'verified', 'userhasrole:owner'])->get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->name('dashboard');
