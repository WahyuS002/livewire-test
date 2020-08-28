<?php

namespace App\Http\Livewire\Counter;

use Livewire\Component;

class Index extends Component
{
    public $counter = 1;

    public function decrease()
    {
        $this->counter -= 1;
    }

    public function increase()
    {
        $this->counter += 1;
    }

    public function render()
    {
        return view('livewire.counter.index');
    }
}
