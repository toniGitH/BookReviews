<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Blog extends Component
{
    #[Layout('components.layouts.secondary')]
    #[Title('Blog')]
    public function render()
    {
        return view('livewire.blog');
    }
}
