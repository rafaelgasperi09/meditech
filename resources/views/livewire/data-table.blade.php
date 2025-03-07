<div>
    <input type="text" wire:model.live="search" placeholder="Buscar..." class="p-2 border rounded" id="search">
    <table class="w-full border-collapse border border-gray-300 mt-3">
        <thead>
        <tr>
            @foreach ($columns as $column)
                <th class="border p-2 cursor-pointer" wire:click="sortBy('{{ $column }}')">
                    {{ __($route_name.'.'.$column) }}
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
                        @elseif($column=='acciones')
                            @if(in_array('edit',$actions))
                                <x-action-link href="{{route($route_name.'.edit',$row->id)}}" title="{{ __('button.edit') }}"><i class="fa-solid fa-edit" aria-hidden="true"></i> </x-action-link>
                            @endif
                            @if(in_array('delete',$actions))
                                    <form method="post" action="{{ route($route_name.'.destroy',$row->id) }}" class="inline-block">
                                        @csrf
                                        @method('delete')
                                        <x-danger-button class="ms-3" title="{{ __('button.delete') }}">
                                            <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                        </x-danger-button>
                                    </form>
                            @endif
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
