<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about-us');

Route::get('/admission-service', function () {
    return view('admission-service');
})->name('admission-service');

Route::get('/assignment-service', function () {
    return view('assignment-service');
})->name('assignment-service');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/copywriting-service', function () {
    return view('copywriting-service');
})->name('copywriting-service');

Route::get('/coursework-service', function () {
    return view('coursework-service');
})->name('coursework-service');

Route::get('/dissertation-service', function () {
    return view('dissertation-service');
})->name('dissertation-service');

Route::get('/editing-service', function () {
    return view('editing-service');
})->name('editing-service');

Route::get('/essay-service', function () {
    return view('essay-service');
})->name('essay-service');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/order-now', function () {
    return view('order-now');
})->name('order-now');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/proofreading-statement', function () {
    return view('proofreading-statement');
})->name('proofreading-service');


Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');


Route::get('/statement-service', function () {
    return view('statement-service');
})->name('statement-service');
