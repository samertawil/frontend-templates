<?php

namespace frontend\template\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Home extends Component
{

    #[Layout('components.layouts.metronic7-simple-app')]
    public function render()
    {
        
        return view('livewire.home');
    }

 
}
