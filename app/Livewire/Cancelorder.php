<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\rental_bookings;

class Cancelorder extends Component
{
    public $OrderID;
    
    public function render()
    {
        return view('livewire.cancelorder');
    }
    public function Canceled()
    {
        notyf()->position('x', 'right')->position('y', 'top')->addSuccess('Product added successfully to your Cart');

        $order=rental_bookings::findOrFail($this->OrderID);
        $order->status='cancled';
        $order->save();
        
    }
}
