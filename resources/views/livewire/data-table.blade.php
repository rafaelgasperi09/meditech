<div>
    <input type="text" wire:model.live="search" placeholder="Buscar..." class="p-2 border rounded" id="search">
    <table class="w-full border-collapse border border-gray-300 mt-3">
        <thead>
        <tr>
            @foreach ($columns as $column)
                <th class="border p-2 cursor-pointer" wire:click="sortBy('{{ $column }}')">
                    {{ ucfirst($column) }}
                    @if ($sortField === $column)
                        @if ($sortDirection === 'asc') ▲ @else ▼ @endif
                    @endif
                </th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $row)
            <tr class="border">
                @foreach ($columns as $column)
                    <td class="border p-2">

                        @if(App\Models\Helper::urlIsImage($row->$column))
                            <img src="{{$row->$columns}}">
                        @else
                            {{ $row->$column }}
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $data->links() }}
    </div>
</div>
