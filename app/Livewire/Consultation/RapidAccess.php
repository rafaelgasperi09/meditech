<?php

namespace App\Livewire\Consultation;

use Livewire\Component;

class RapidAccess extends Component
{
    public $consultation_field_id;
    public $items;

    public function render()
    {
        return view('livewire.consultation.rapid-access');
    }

    public function mount($consultation_field_id){
        $this->consultation_field_id= $consultation_field_id;

        $this->items = \App\Models\RapidAccess::whereConsultationFieldId($consultation_field_id)->get();
    }
}
