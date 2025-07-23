<?php

namespace App\Livewire;

use Livewire\Component;

class PageHeader extends Component
{
    public $name = 'Antonio';
    public $subtitle;
    
    // Esto es un hook que se ejecuta al montar el componente, pero si sólo es para recibir valores, no hace falta.
    // Sí sería necesario si luego quiero hacer algo con ese valor, como strtolower, etc...
    public function mount($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    public function render()
    {
        return view('livewire.page-header');
    }
}
