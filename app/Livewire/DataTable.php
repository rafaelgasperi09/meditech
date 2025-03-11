<?php

namespace App\Livewire;


use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

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

    public function mount($model, $columns,$pagination=10,$actions='',$routename='')
    {
        $this->model = $model; // Convierte el string en una instancia de modelo
        $this->class = new $model;
        $this->columns = $columns;
        $this->pagination = $pagination;
        $this->actions = array_values($actions);
        $this->route_name = $routename;
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
                    if($column=='full_name')
                        $q->orWhereRaw("first_name like '%" . $this->search . "%' or last_name like '%" . $this->search . "%'");

                    if(Schema::hasColumn($this->class->getTable(),$column))
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


}
