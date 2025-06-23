<?php

use App\Http\Controllers\PastController;
use Illuminate\Support\Facades\Route;
use App\Models\Competition;
use App\Models\Event;
use App\Models\Past;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page', 'competitions' => Competition::all()]);
});

Route::get('/gallery', function () {
    return view('gallery', ['title' => 'Gallery Page']);
});

Route::get('/register', function () {
    return view('register', ['title' => 'Register Page', 'events' => Event::all()]);
});

Route::get('/events', function () {
    return view('events', ['title' => 'Events Page', 'events' => Event::all()]);
});

Route::get('/event_detail/{slug}', function ($slug) {
    $event = Event::find($slug);
    return view('event_detail', ['title' => 'Event Detail Page', 'event' => $event]);
});

Route::get('/opening_detail', function () {
    return view('opening_detail', ['title' => 'Opening Detail Page']);
});

Route::get('/expo_detail', function () {
    return view('expo_detail', ['title' => 'Expo Detail Page']);
});

Route::get('/seminar_detail', function () {
    return view('seminar_detail', ['title' => 'Seminar Detail Page']);
});

Route::get('/closing_detail', function () {
    return view('closing_detail', ['title' => 'Closing Detail Page']);
});

Route::get('/competitions', function () {
    return view('competitions', ['title' => 'Competition Page', 'competitions' => Competition::all()]);
});

Route::get('/past_events', function () {
    return view('past_events', ['title' => 'Past Events Page', 'pasts' => Past::all()]);
});

Route::get('/registerCompetitions', function () {
    return view('register_to_competitions', ['title' => 'Register Competition Page', 'competitions' => Competition::all()]);
});

Route::get('/competition_detail/{slug}', function ($slug) {
    $competition = Competition::find($slug);
    return view('competition_detail', ['title' => 'Competition Detail Page', 'competition' => $competition]);
});


Route::get('/home_competition_detail/{slug}', function ($slug) {
    $competition = Competition::find($slug);
    return view('home_competition_detail', ['title' => 'Home Competition Detail Page', 'competition' => $competition]);
});

Route::get('/past_event_detail/{id}', [PastController::class, 'show'])->name('past_event_detail');
