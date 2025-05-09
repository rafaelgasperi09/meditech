<?php

namespace App\Livewire\Patient;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{

    use WithPagination;

    public $model; // Modelo dinámico
    public $class;
    public $columns = []; // Columnas a mostrar
    public $actions = [];
    public $search; // Búsqueda
    public $sortField = 'id'; // Ordenación por defecto
    public $sortDirection = 'asc'; // Dirección de orden
    public $pagination;

    public $count = 0;
    public $route_name;
    public $title='';
    public $showModal = false;
    public $selectedPatient;

    public $note;

    public function mount($pagination=10,$sortField='id',$sortDirection='asc',$routename='',$title='')
    {
        $this->class = new Patient();
        $this->pagination = $pagination;
        $this->route_name = $routename;
        $this->sortField =$sortField;
        $this->sortDirection =$sortDirection;
        $this->title=$title;
    }

    public function openModal($patientId)
    {
        $this->selectedPatient = Patient::find($patientId);
        $this->note = $this->selectedPatient->note ?? '';
        $this->showModal = true;
    }

    public function saveNote()
    {
        $this->validate(['note' => 'required|string|max:1000']);

        $this->selectedPatient->notes()->create([
            'user_id'=>auth()->id(),
            'note'=>$this->note,
            'type'=>'enfermeria',
        ]);

        $this->showModal = false;
        session()->flash('message', 'Nota guardada correctamente.');
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }
    public function render()
    {
        $data = Patient::query()
            ->when($this->search, function (Builder $query) {
                $query->where(function ($q) { // Asegura que las condiciones sean correctas
                    $q->orWhere('birthdate', 'like', '%' . $this->search . '%');
                    $q->orWhere('id_number', 'like', '%' . $this->search . '%');
                    $q->orWhere('email', 'like', '%' . $this->search . '%');
                    $q->orWhere('first_name', 'like', '%' . $this->search . '%');
                    $q->orWhere('last_name', 'like', '%' . $this->search . '%');
                });
            })
            ->when(Schema::hasColumn($this->class->getTable(),$this->sortField),function ($q){
                $q->orderBy($this->sortField, $this->sortDirection);
            })
            ->paginate($this->pagination);
        return view('livewire.patient.data-table', [ 'data' => $data, ]);
    }

}
