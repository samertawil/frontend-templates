<?php

namespace frontend\template\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Test extends Component
{

    #[Layout('pack::components.layouts.metronic7-app')]
    public function render()
    {
        
        return view('pack::livewire.test');
    }

 
}
