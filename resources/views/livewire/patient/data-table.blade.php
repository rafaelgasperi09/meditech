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
                            {{ route('patient.create') }}
                        @endslot
                    @endcomponent
                    <!-- /Table Header -->
                    @if(session()->has('message'))
                        <div class="bg-green-100 text-green-800 p-2 mb-2 rounded">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table border-0 custom-table comman-table mb-0">
                            <thead>
                            <tr>
                                <th class="border-b border-gray-300 p-2 cursor-pointer" wire:click="sortBy('id')">Id  @if ($sortDirection === 'asc') ▲ @else ▼ @endif</th>
                                <th class="border-b border-gray-300 p-2 cursor-pointer" wire:click="sortBy('first_name')">{{__('patient.full_name')}}  @if ($sortDirection === 'asc') ▲ @else ▼ @endif</th>
                                <th class="border-b border-gray-300 p-2 cursor-pointer" wire:click="sortBy('birthdate')">{{__('patient.birthdate')}}  @if ($sortDirection === 'asc') ▲ @else ▼ @endif</th>
                                <th>{{__('patient.full_id_number')}}</th>
                                <th>{{__('patient.email')}}</th>
                                <th>{{__('patient.whatsapp')}}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $patient)
                                <tr>
                                    <td>{{$patient->id}}</td>
                                    <td>{!!  $patient->profile_name !!}</td>
                                    <td>{!!  $patient->birthdate !!} </td>
                                    <td>{{ $patient->full_id_number }}</td>
                                    <td>{{ $patient->email }}</td>
                                    <td>{{ $patient->whatsapp }}</a></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="javascript:;" class="action-icon dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item"  wire:click="openModal({{ $patient->id }})">  <i  class="fa-solid fa-sticky-note m-r-5"></i>
                                                    {{__('patient.add_note')}}
                                                </a>
                                                <a class="dropdown-item"  href="{{ route('patient.edit',$patient->id) }}">  <i  class="fa-solid fa-pen-to-square m-r-5"></i>
                                                    {{__('generic.edit')}}
                                                </a>
                                                <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i> {{__('generic.delete')}}</a>
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
        @if($showModal)
        <!-- Modal -->
        <div class="modal fade show" id="bs-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel" style="display: block;" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <textarea wire:model.defer="note" rows="5" class="w-full border p-2 rounded mb-4"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button  wire:click="$set('showModal', false)" type="button" class="btn btn-light" data-bs-dismiss="modal">{{ __('generic.cancel') }}</button>
                        <button  wire:click="saveNote" type="button" class="btn btn-primary">{{ __('generic.save') }}</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        @endif
    </div>
</div>
