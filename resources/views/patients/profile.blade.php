<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('patient.titles') }}
                @endslot
                @slot('li_1')
                    {{ __('patient.title') }}   {{__('patient.profile')}}
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <livewire:patient.patient-head patient_id="{{$id}}"/>
                    <div class="row">
                        <livewire:patient.patient-profile-about patient_id="{{$id}}"/>
                        <livewire:patient.patient-profile-details patient_id="{{$id}}"/>
                    </div>
                </div>
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
</x-app-layout>>
