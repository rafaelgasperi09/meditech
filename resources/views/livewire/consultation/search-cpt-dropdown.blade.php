<div class="row">
    <div class="col-md-6">
        <input type="text"  wire:model.live="query"   class="form-control" placeholder="Buscar..." >

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
        <ul>
            @foreach($selected as $r)
                <li>
                    <div class="input-group mb-3">
                        {{$r->cpt->code}} | {{$r->cpt->description_es}}
                        <span class="input-group-text" id="basic-addon2" wire:click="delete({{$r->id}})"><i class="fa fa-trash" title="eliminar"/></span></span>
                    </div>

                </li>
            @endforeach
        </ul>
    </div>
</div>
