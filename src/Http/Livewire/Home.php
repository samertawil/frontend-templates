<?php

namespace frontend\template\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Home extends Component
{

    #[Layout('pack::components.layouts.metronic7-simple-app')]
    public function render()
    {
        
        return view('pack::livewire.home');
    }

 
}
