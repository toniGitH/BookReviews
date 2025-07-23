<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Title;

class BookList extends Component
{
    public function delete(Book $book){
        $book->delete();
    }

    #[Title('Home - Lista de libros')]
    public function render()
    {
        return view('livewire.book-list', [
            'books' => Book::all(),
        ]);
    }
}
