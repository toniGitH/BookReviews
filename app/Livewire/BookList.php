<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Title;

class BookList extends Component
{
    public $name = 'Antonio';

    public function delete(Book $book){
        $book->delete();
    }

    #[Title('Lista de libros')]
    public function render()
    {
        return view('livewire.book-list', [
            'books' => Book::all(),
        ]);
    }
}
