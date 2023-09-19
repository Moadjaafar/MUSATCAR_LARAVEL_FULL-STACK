<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function render()
    {
        return view('livewire.test');
    }
    public function notyme()
    {
        notyf()->position('x', 'right')->position('y', 'top')->addSuccess('Product added successfully to your Cart');

    }
}
