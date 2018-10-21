<?php

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
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', 'BooksController');

Route::get('/challenge', function() {
	return view('challenge');
});

Route::get('/lib-sys', function() {
	return view('lib-sys');
});

Route::resource('book-list', 'BookListController');

Route::resource('addbook', 'AddBookController');

Route::resource('borrowed', 'BorrowedController');

Route::resource('sampleSearch', 'SearchController');
