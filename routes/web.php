<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $books = \App\Models\Book::with('reviews')->take(3)->get();
    dd($books);

});
