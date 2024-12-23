<?php

namespace frontend\template\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class MissingPeopel extends Component
{

    public function hello() {
        dd(1);
    }

    
    #[Layout('components.layouts.metronic7-simple-app')]
    public function render()
    {
        
        $title='samer1'; 
      
        return view('livewire.missing-peopel')->layoutData(['title'=>'samer']);
    }
}
