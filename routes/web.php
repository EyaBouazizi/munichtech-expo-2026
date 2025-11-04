<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\BoothController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\AddonController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobSeekerController;
use App\Http\Controllers\ContactController;


use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tickets', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/event-details', [PageController::class, 'eventDetails'])->name('event.details');
Route::get('/expo-zones', [PageController::class, 'expoZones'])->name('expo.zones');
Route::get('/tickets-page', [PageController::class, 'tickets'])->name('tickets.page');
Route::get('/sponsors', [PageController::class, 'sponsors'])->name('sponsors');
Route::post('/sponsor-store', [SponsorController::class, 'store'])->name('sponsor.store');
Route::get('/exhibitors', [PageController::class, 'exhibitors'])->name('exhibitors');
Route::post('/booth-store', [BoothController::class, 'store'])->name('booth.store');
Route::get('/speakers', [PageController::class, 'speakers'])->name('speakers');
Route::post('/speaker-store', [SpeakerController::class, 'store'])->name('speaker.store');
Route::get('/workshops', [PageController::class, 'workshops'])->name('workshops');
Route::post('/addon-store', [AddonController::class, 'store'])->name('addon.store');
Route::get('/talent-hub', [PageController::class, 'talentHub'])->name('talent.hub');
Route::post('/employer-store', [EmployerController::class, 'store'])->name('employer.store');
Route::post('/jobseeker-store', [JobSeekerController::class, 'store'])->name('jobseeker.store');
Route::get('/agenda', [PageController::class, 'agenda'])->name('agenda');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');









