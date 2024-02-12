<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;


class Category extends Component
{
    public $nome = "Rocha";

    public function render()
    {
         
        return view('livewire.category');
    }
}; 
