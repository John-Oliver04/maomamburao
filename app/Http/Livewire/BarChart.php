<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BarChart extends Component
{
    public $yearselect;
    public function render()
    {
        return view('livewire.bar-chart');
    }
}
