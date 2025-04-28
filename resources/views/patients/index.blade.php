<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('patient.titles') }}
                @endslot
                @slot('li_1')
                        {{ __('patient.titles') }}   {{ __('generic.list') }}
                @endslot
            @endcomponent
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table show-entire p-0 table-dash">
                        <div class="card-body">
                            <div class="table-responsive">
                                <livewire:data-table model="{{$model}}"
                                                     :columns="['id', 'full_name', 'birthdate','full_id_number','email','whatsapp','acciones']"
                                                     :actions="['edit','delete']"
                                                     routename="patient"
                                                     sortField="first_name"
                                                     sortDirecction="asc"
                                                     title="{{ __('generic.list') }} {{ __('patient.titles') }} "
                                                     wire:key="{{\Illuminate\Support\Str::random(5)}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>


</x-app-layout>
