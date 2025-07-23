<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\BookList;
use App\Livewire\CreateBook;
use App\Livewire\Blog;

Route::get('/', BookList::class)->name('book.list');
Route::get('/create', CreateBook::class)->name('book.create');
Route::get('/blog', Blog::class)->name('blog.index');

