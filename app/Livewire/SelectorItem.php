<?php

namespace App\Livewire;

use App\Models\ConsultationList;
use Livewire\Component;

class SelectorItem extends Component
{
    public $items;
    public function render()
    {
        return view('livewire.selector-item');
    }

    public function mount($list_type){
        $this->items = ConsultationList::whereType($list_type)->orderBy('order')->get();
    }
}
