<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('patient.titles') }}
                @endslot
                @slot('li_1')
                    {{ __('generic.list') }} {{ __('patient.titles') }}
                @endslot
            @endcomponent
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table show-entire p-0 table-dash">
                        <div class="card-body">
                            <div class="table-responsive">
                                <livewire:patient.data-table model="{{$model}}"
                                                             routename="patient"
                                                             sortField="first_name"
                                                             sortDirecction="asc"
                                                             title="{{ __('generic.list') }} {{ __('appointment.titles') }}"
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
