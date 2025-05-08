<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table show-entire">
                <div class="card-body">
                    <!-- Table Header -->
                    @component('components.table-header')
                        @slot('title')

                        @endslot
                        @slot('li_1')
                            {{ route('appointment.create') }}
                        @endslot
                    @endcomponent
                    <!-- /Table Header -->
                    <div class="table-responsive">
                        <table class="table border-0 custom-table comman-table mb-0">
                            <thead>
                            <tr>
                                <th class="border-b border-gray-300 p-2 cursor-pointer" wire:click="sortBy('id')">Id  @if ($sortDirection === 'asc') ▲ @else ▼ @endif</th>
                                <th>{{__('appointment.patient')}}</th>
                                <th>{{__('appointment.doctor')}}</th>
                                <th class="border-b border-gray-300 p-2 cursor-pointer" wire:click="sortBy('status')">{{__('appointment.status')}}  @if ($sortDirection === 'asc') ▲ @else ▼ @endif</th>
                                <th>{{__('appointment.type')}}</th>
                                <th>{{__('appointment.consultorio')}}</th>
                                <th class="border-b border-gray-300 p-2 cursor-pointer" wire:click="sortBy('start_date')">{{__('appointment.date')}}  @if ($sortDirection === 'asc') ▲ @else ▼ @endif</th>
                                <th>{{__('appointment.time')}}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $appointment)
                                <tr>
                                    <td>{{$appointment->id}}</td>
                                    <td>{!!  $appointment->patient->profile_name !!}</td>
                                    <td>{!!  $appointment->user->profile_name !!} </td>
                                    <td>{{ $appointment->status }}</td>
                                    <td>{{ $appointment->type->name }}</td>
                                    <td>{{ $appointment->consultingRoom->name }}</a></td>
                                    <td>{{ \Carbon\Carbon::parse($appointment->start_date)->format('d-m-Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($appointment->start_date)->format('H:i') }} - {{ \Carbon\Carbon::parse($appointment->end_date)->format('H:i') }}</td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="javascript:;" class="action-icon dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{route('consultation.show',$appointment->id)}}" >
                                                    <i class="fa fa-clock-o"></i>
                                                    @if($appointment->status=='programada')
                                                        {{__('appointment.start')}}
                                                    @else
                                                        {{__('appointment.edit')}}
                                                    @endif
                                                        {{__('appointment.consultation')}}
                                                </a>
                                                <a class="dropdown-item"  href="{{ route('appointment.edit',$appointment->id) }}">  <i  class="fa-solid fa-pen-to-square m-r-5"></i>
                                                    {{__('generic.edit')}}
                                                </a>
                                                <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i> {{__('generic.delete')}}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="mt-3" class="float-right">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
