<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Dashboard');
})->name('Dashboard');

Route::get('/questions', function () {
    return Inertia::render('Questions');
});

Route::get('/well_being_report', function () {
    return Inertia::render('Well_being_report');
});

Route::get('/survey_report', function () {
    return Inertia::render('Survey_report');
});

Route::get('/Answer', function () {
    return Inertia::render('Answer');
});

Route::get('/bug_report', function () {
    return Inertia::render('Bug_report');
});

// athena
Route::get('/edit_daily_questions', function () {
    return Inertia::render('Edit_Daily_Questions');
});

Route::get('/add_event', function () {
    return Inertia::render('Add_Event');
});