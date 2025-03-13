<div class="relative w-64">
    <input
        type="text"
        wire:model.live.debounce.1000ms="query"
        class="w-full border rounded p-2"
        placeholder="Buscar..."
    >

    @if(!empty($results))
        <ul class="absolute bg-white border w-full mt-1 rounded shadow-lg max-h-40 overflow-y-auto">
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
