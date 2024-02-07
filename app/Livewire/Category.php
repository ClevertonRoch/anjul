<?php

namespace App\Livewire;

use Livewire\Component;

class Category extends Component
{
    public $nome = "Rocha";
    public function render()
    {
        
        return view('livewire.category');
    }
}
