<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\rental_bookings;

class Confirmorder extends Component
{
    public $OrderID;
    public function render()
    {
        return view('livewire.confirmorder');
    }
    public function Confirmed()
    {
        $order=rental_bookings::findOrFail($this->OrderID);
        $order->status='confirmed';
        $order->save();
        notyf()
        ->position('x', 'right')
        ->position('y', 'top')
        ->addError('the bookings hase been confirmed');
    
    }
}
