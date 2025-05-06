<?php

namespace App\Livewire\Consultation;

use App\Models\RapidAccess;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchCptDropdown extends Component
{
    public $query = '';
    public $results = [];

    public $path;
    public $type;
    public $consultation_field_id;

    public $consultation;
    public $is_patient = false;

    public $selected=array();
    public $client_id;

    public function mount(){
        if($this->type=='laboratory') $this->consultation_field_id =40;
        if($this->type=='images')      $this->consultation_field_id =43;
        if($this->type=='procedure')  $this->consultation_field_id =46;
       $this->setSelectedOptions();
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

        RapidAccess::create([
            'type'=>'CLIENT',
            'client_id'=> $this->client_id,
            'user_id'=>auth()->user()->id,
            'consultation_field_id'=>$this->consultation_field_id,
            'cpt_id'=>$option['id'],
        ]);

        $this->selectedOption = $option;
        $this->query = $option['name']; // Asigna el nombre seleccionado al input
        $this->results = []; // Limpia los resultados

        $this->setSelectedOptions();
    }

    public function setSelectedOptions(){
        if(auth()->user()->clients()->first()){
            $this->client_id = auth()->user()->clients()->first()->id;
            $this->selected = RapidAccess::whereClientId(auth()->user()->clients()->first()->id)
                ->whereHas('cpt',function ($q){
                    $q->whereType($this->type);
                })->whereConsultationFieldId($this->consultation_field_id)->whereType('CLIENT')->get();

        }
    }

    public function delete($id){
        $rapidAccess = RapidAccess::find($id);
        $rapidAccess->delete();
        $this->setSelectedOptions();
    }

    public function clearInput(){

        $this->selectedOption ='';
        $this->query ='';
    }

    public function render()
    {
        return view('livewire.consultation.search-cpt-dropdown');
    }
}
