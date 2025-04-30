<?php

namespace App\Livewire;

use App\Models\ConsultationField;
use App\Models\ConsultationFieldTemplate;
use Livewire\Component;

class ItemTransfer extends Component
{
    public $availableItems = [];
    public $selectedItems = [];

    public $client_id;


    public function mount()
    {
        // Por ejemplo, llenar con datos de una base
        $disponibles = ConsultationField::pluck('id');
        $selecionados =[];

        if(auth()->user()->clients()->first()){
            $this->client_id = auth()->user()->clients()->first()->id;
            $selecionados = ConsultationFieldTemplate::whereClientId($this->client_id)->whereType('client')->pluck('consultation_field_id');
        }

        if(count($selecionados)==0){
            $this->availableItems =ConsultationField::get()->toArray();
            $this->selectedItems = [];
        }else{

            $diff = $disponibles->diff($selecionados);
            $diff2 = $selecionados->diff($disponibles);

            $this->availableItems = ConsultationField::whereIn('id',$diff)->get()->toArray();
            $this->selectedItems = ConsultationField::whereIn('id',$selecionados)->get()->toArray();;
        }
    }

    public function moveToSelected($itemId)
    {
        $item = collect($this->availableItems)->firstWhere('id', $itemId);
        if ($item) {
            $this->availableItems = array_values(array_filter($this->availableItems, fn($i) => $i['id'] !== $itemId));
            $this->selectedItems[] = $item;
        }

        ConsultationFieldTemplate::create([
            'type'=>'client',
            'client_id'=>$this->client_id,
            'user_id'=>auth()->user()->id,
            'consultation_field_id'=>$itemId,
        ]);
    }

    public function moveToAvailable($itemId)
    {
        $item = collect($this->selectedItems)->firstWhere('id', $itemId);
        if ($item) {
            $this->selectedItems = array_values(array_filter($this->selectedItems, fn($i) => $i['id'] !== $itemId));
            $this->availableItems[] = $item;
        }

        $field = ConsultationFieldTemplate::whereRaw("(client_id = ".$this->client_id." or user_id = ".auth()->user()->id.")")->whereConsultationFieldId($itemId)->first();
        $field->delete();
    }

    public function updateOrder($orderedIds)
    {
        $this->selectedItems = collect($orderedIds)->map(function ($id) {
            return collect($this->selectedItems)->firstWhere('id', $id);
        })->toArray();
    }

    public function render()
    {
        return view('livewire.item-transfer');
    }
}
