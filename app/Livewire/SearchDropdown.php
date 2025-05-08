<?php

namespace App\Livewire;

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
    public $selectedLists=[];

    public function mount($path,$consultation_field_id=null,$consultation_id=null,$is_patient=false){
        $this->path = url($path);
        $this->consultation_field_id = $consultation_field_id;
        $this->consultation = Consultation::find($consultation_id);
        $this->consultation_field = ConsultationField::find($consultation_field_id);

        $this->is_patient=$is_patient;

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
        return view('livewire.search-dropdown');
    }

}
