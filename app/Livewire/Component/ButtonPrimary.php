<?php

namespace App\Livewire\Component;

use Livewire\Component;

class ButtonPrimary extends Component
{

    public $text ='';

    public function render()
    {
        return view('livewire.component.button-primary');
    }
}
