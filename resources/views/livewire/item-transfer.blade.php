<div>
    <!-- Dragula JS -->
    <script src="{{ url('assets/plugins/dragula/js/dragula.min.js') }}"></script>
    <script src="{{ url('assets/plugins/dragula/js/drag-drop.min.js') }}"></script>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="flex gap-0" x-data>
        <!-- Tabla de disponibles -->
        <div class="w-10/12">
            <h2 class="text-center">Campos Disponibles</h2>
            <ul class="list-group" id="basic-list-group">
                @foreach($availableItems as $item)
                    <li class="list-group-item draggable">
                        {{ $item['section'] }} | {{ $item['label'] }}

                        <button wire:click="moveToSelected({{ $item['id'] }})" type="button" class="text-end">➤</button>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Tabla de seleccionados -->
        <div class="w-1/2">
            <h2 class="text-center">Campos Seleccionados</h2>
            <ul id="sortable-list" class="space-y-2">
                @foreach($selectedItems as $item)
                    <li class="border p-2 flex justify-between" data-id="{{ $item['id'] }}">
                        {{ $item['section'] }} | {{ $item['label'] }}
                        <button wire:click="moveToAvailable({{ $item['id'] }})" type="button">⮜</button>
                    </li>
                @endforeach
            </ul>
        </div>

        <script>
            document.addEventListener('livewire:load', () => {
                let el = document.getElementById('sortable-list');
                new Sortable(el, {
                    animation: 150,
                    onEnd: function () {
                        let orderedIds = [...el.children].map(li => li.getAttribute('data-id'));
                        Livewire.emit('updateOrder', orderedIds);
                    }
                });
            });
        </script>
    </div>
</div>
