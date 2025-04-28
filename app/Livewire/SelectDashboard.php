<?php

namespace App\Livewire;

use Livewire\Component;

class SelectDashboard extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ '2023', '2022', '2021', '2020' ];
    }

    public function render()
 {
        return view( 'livewire.select-dashboard' );
    }
}
