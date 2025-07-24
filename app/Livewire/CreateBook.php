<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Book;
use Livewire\Attributes\Rule;

class CreateBook extends Component
{
    #[Rule('string|required|min:3|max:50')]
    public $title;
    #[Rule('string|required|min:3|max:50')]
    public $author;
    #[Rule('integer|required|min:0|max:10')]
    public $rating;

    public function save(){

        $this->validate();
        // Si usamos propiedades PHP ya no necesitamos declarar las reglas de validación aquí.
        // Pero si preferimos no usar propiedades PHP, podemos escribir las reglas aquí dentro.
        // Aunque usemos propiedades PHP, seguimos necesitando el método validate().
        // El método validate sin recibir parámetros ya asume que debe usar las reglas declaradas en las propiedades PHP

        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating
        ]);

        $this->redirect('/');
    }

    #[Title('Nuevo libro')]
    public function render()
    {
        return view('livewire.create-book');
    }
}