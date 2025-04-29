<?php

namespace App\Livewire\Patient;

use App\Models\Consultation;
use App\Models\ConsultationData;
use App\Models\ConsultationField;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $query = '';
    public $results = [];
    public $selectedOption = null;
    public $path;
    public $consultation_field_id;
    public $consultation_field;
    public $consultation;
    public $is_patient = false;

    public function mount(){
        $this->path = url('api/patients?dropdown=true');
    }

    public function updatedQuery()
    {
        if (strlen($this->query) < 2) {
            $this->results = [];
            return;
        }

        $response = Http::get($this->path, [
            'dropdown'=>true,
            'q' => $this->query,
        ]);

        $this->results = $response->json() ?? [];
    }

    public function selectOption($option)
    {
        $this->selectedOption = $option;
        $this->query = $option['name']; // Asigna el nombre seleccionado al input
        $this->results = []; // Limpia los resultados
    }

    public function render()
    {
        return view('livewire.patient.search-dropdown');
    }

}
