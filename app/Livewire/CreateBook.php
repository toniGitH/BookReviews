<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class CreateBook extends Component
{
    #[Title('Nuevo libro')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
