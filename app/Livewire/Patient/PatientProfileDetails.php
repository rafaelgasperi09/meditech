<?php

namespace App\Livewire\Patient;

use App\Models\Patient;
use Livewire\Component;

class PatientProfileDetails extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.patient.patient-profile-details');
    }

    public function mount($patient_id){
        $this->data = Patient::find($patient_id);
    }
}
