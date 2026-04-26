<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan5', function () {
    return view('pertemuan5');
})->name('pertemuan5');

Route::get('/makeoverig', function () {
    return view('makeoverig');
})->name('makeoverig');

Route::get('/linktree', function () {
    return view('linktree');
})->name('linktree');

Route::get('/indexp5', function () {
    return view('indexP5');
})->name('indexp5');

Route::get('/5026231186', function () {
    return view('5026231186');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news1', function () {
    return view('news1');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

