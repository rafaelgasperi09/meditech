<div class="row">
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text"  wire:model.live="query"   class="form-control" placeholder="Buscar {{$type}}" >
            <button class="input-group-text btn btn-info submit-form me-2" id="basic-addon2" wire:click="clearInput()"><i class="fa fa-close"></i> {{__('Limpiar')}}</button>
        </div>

        <!-- Spinner de Carga -->
        <div wire:loading class="absolute right-2 top-2">
            <div class="animate-spin rounded-full h-5 w-5 border-t-2 border-blue-500"></div>
        </div>

        @if(!empty($results))
            <ul class="absolute bg-white border w-full mt-1 rounded shadow-lg max-h-40 overflow-y-auto" style="z-index: 1000">
                @foreach($results as $result)
                    <li
                        class="p-2 hover:bg-gray-200 cursor-pointer text-sm"
                        wire:click="selectOption({{ json_encode($result) }})"
                    >
                        {{ $result['name'] }}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="col-md-6">
        <b>Seleccionados</b>
        @foreach($selected as $r)
            <div class="row mb-3">
                <div class="col-md-8">
                    {{$r->cpt->code}} | {{$r->cpt->description_es}}
                </div>
                <div class="col-md-2">
                     <button class="btn btn-danger submit-form me-2" wire:click="delete({{$r->id}})">
                        <i class="fa fa-trash" title="eliminar"></i> {{__('generic.delete')}}
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>
