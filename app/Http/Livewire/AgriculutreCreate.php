<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AgriculutreCreate extends ModalComponent
{
    public function render()
    {
        return view('livewire.agriculteur.create');
    }
}
