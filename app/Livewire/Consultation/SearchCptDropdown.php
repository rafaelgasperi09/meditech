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

    public function mount($type){
        $rapid_access_settings = collect();
        if(auth()->user()->clients()->first()){
            $this->client_id = auth()->user()->clients()->first()->id;
            $this->selected = RapidAccess::whereClientId(auth()->user()->clients()->first()->id)
                ->whereHas('cpt',function ($q){
                $q->whereType($this->type);
            })->whereType('CLIENT')->get();

        }
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
        if($this->type=='laboratory') $consultation_field_id =40;
        if($this->type=='image')      $consultation_field_id =43;
        if($this->type=='procedure')  $consultation_field_id =46;
        RapidAccess::create([
            'type'=>'CLIENT',
            'client_id'=> $this->client_id,
            'user_id'=>auth()->user()->id,
            'consultation_field_id'=>$consultation_field_id,
            'cpt_id'=>$option['id'],
        ]);

        $this->selectedOption = $option;
    }

    public function render()
    {
        return view('livewire.consultation.search-cpt-dropdown');
    }
}
