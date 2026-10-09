<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;

// Locale Switch Route
Route::get('/locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');

// Main Dashboard
Route::get('/', function () {
    return view('pages.dashboard.hr', ['title' => 'HR Dashboard']);
})->name('dashboard');

// Main Section Routes
Route::get('/notifications', function () {
    return view('pages.hr.notifications', ['title' => 'Notifications']);
})->name('notifications');

Route::get('/search', function () {
    return view('pages.hr.search', ['title' => 'Search']);
})->name('search');

Route::get('/calendar', function () {
    return view('pages.calender', ['title' => 'Calendar']);
})->name('calendar');

// People Section Routes
Route::get('/employees', function () {
    return view('pages.hr.employees', ['title' => 'Employees']);
})->name('employees');

Route::get('/org-chart', function () {
    return view('pages.hr.org-chart', ['title' => 'Org Chart']);
})->name('org-chart');

Route::get('/teams', function () {
    return view('pages.hr.teams', ['title' => 'Teams']);
})->name('teams');

// Time & Leave Section Routes
Route::get('/leave', function () {
    return view('pages.hr.leave', ['title' => 'Leave']);
})->name('leave');

Route::get('/attendance', function () {
    return view('pages.hr.attendance', ['title' => 'Attendance']);
})->name('attendance');

Route::get('/timesheet', function () {
    return view('pages.hr.timesheet', ['title' => 'Timesheet']);
})->name('timesheet');

// Talent Section Routes
Route::get('/performance', function () {
    return view('pages.hr.performance', ['title' => 'Performance']);
})->name('performance');

Route::get('/training', function () {
    return view('pages.hr.training', ['title' => 'Training']);
})->name('training');

Route::get('/onboarding', function () {
    return view('pages.hr.onboarding', ['title' => 'Onboarding']);
})->name('onboarding');

Route::get('/offboarding', function () {
    return view('pages.hr.offboarding', ['title' => 'Offboarding']);
})->name('offboarding');

Route::get('/recruitment', function () {
    return view('pages.hr.recruitment', ['title' => 'Recruitment']);
})->name('recruitment');

// Finance Section Routes
Route::get('/payroll', function () {
    return view('pages.hr.payroll', ['title' => 'Payroll']);
})->name('payroll');

Route::get('/expenses', function () {
    return view('pages.hr.expenses', ['title' => 'Expenses']);
})->name('expenses');

// Insights Section Routes
Route::get('/analytics', function () {
    return view('pages.hr.analytics', ['title' => 'Analytics']);
})->name('analytics');

Route::get('/surveys', function () {
    return view('pages.hr.surveys', ['title' => 'Pulse Surveys']);
})->name('surveys');

// More Section Routes
Route::get('/directory', function () {
    return view('pages.hr.directory', ['title' => 'Directory']);
})->name('directory');

Route::get('/announcements', function () {
    return view('pages.hr.announcements', ['title' => 'Announcements']);
})->name('announcements');

Route::get('/documents', function () {
    return view('pages.hr.documents', ['title' => 'Documents']);
})->name('documents');

Route::get('/help', function () {
    return view('pages.hr.help', ['title' => 'Help']);
})->name('help');

Route::get('/settings', function () {
    return view('pages.hr.settings', ['title' => 'Settings']);
})->name('settings');

// Profile Page
Route::get('/profile', function () {
    return view('pages.profile', ['title' => 'Profile']);
})->name('profile');
