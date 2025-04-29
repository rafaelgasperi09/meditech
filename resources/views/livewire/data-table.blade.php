<div>
    <!-- Table Header -->
    @component('components.table-header')
        @slot('title')
          {{$title}}
        @endslot
        @slot('li_1')
            {{ route($route_name.'.create') }}
        @endslot
    @endcomponent
    <!-- /Table Header -->

    <table class="table border-0 custom-table comman-table mb-0">
        <thead>
        <tr>
            @foreach ($columns as $column)
                <th class="border-b border-gray-300 p-2 cursor-pointer @if($column=='acciones') text-end @endif" wire:click="sortBy('{{ $column }}')">
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
            <tr class="">
                @foreach ($columns as $column)
                    <td class="border-b border-gray-100 p-2 @if($column=='acciones') text-end @endif" >
                        @if(App\Models\Helper::urlIsImage($row->$column))
                            <img src="{{$row->$columns}}">
                        @elseif($column=='acciones')
                            <div class="dropdown dropdown-action">
                                <a href="javascript:;" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i   class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    @if(in_array('edit',$actions))
                                    <a class="dropdown-item" href="{{route($route_name.'.edit',$row->id)}}"><i   class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
                                    @endif
                                    @if(in_array('delete',$actions))
                                    <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"  data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                    @endif
                                </div>
                            </div>
                        @else
                            {!! $row->$column  !!}
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-3" class="float-right">
        {{ $data->links() }}
    </div>
    <p>&nbsp;</p>
</div>
