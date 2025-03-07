<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class DataTable extends Component
{
    use WithPagination;

    public $model; // Modelo dinámico
    public $columns = []; // Columnas a mostrar
    public $search; // Búsqueda
    public $sortField = 'id'; // Ordenación por defecto
    public $sortDirection = 'asc'; // Dirección de orden

    public $pagination;

    public $count = 0;

    public function mount($model, $columns,$pagination=10)
    {
        $this->model = $model; // Convierte el string en una instancia de modelo
        $this->columns = $columns;
        $this->pagination = $pagination;
    }

    /*public function updatingSearch()
    {
        //$this->resetPage();

        $this->render();
    }*/

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
        $data = $this->model::query()
        ->when($this->search, function (Builder $query) {
            $query->where(function ($q) { // Asegura que las condiciones sean correctas
                foreach ($this->columns as $column) {
                    if(!in_array($column,['acciones']))
                        $q->orWhere($column, 'like', '%' . $this->search . '%');
                }
            });
        })
        ->orderBy($this->sortField, $this->sortDirection)
        ->paginate($this->pagination);

        return view('livewire.data-table', [
            'data' => $data,
        ]);
    }

    public function increment()
    {
        $this->count++;
    }
}
