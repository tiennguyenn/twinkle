<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public $step = 1;

    public function increment()
    {
        $this->count+= $this->step;
    }

    public function decrement()
    {
        $this->count-= $this->step;
    }

    public function resetCount()
    {
        $this->count = 0;
    }

    public function setStep()
    {
        $this->step = $this->step;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
