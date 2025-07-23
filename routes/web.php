<?php

use App\Livewire\BookList;
use App\Livewire\CreateBook;
use Illuminate\Support\Facades\Route;

Route::get('/', BookList::class)->name('book.list');
Route::get('/create', CreateBook::class)->name('book.create');
