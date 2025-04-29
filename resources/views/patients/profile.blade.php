<?php $page = 'patient-profile'; ?>
<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Patients
                @endslot
                @slot('li_1')
                    Patient Profile
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    @livewire('patient.patient-head')
                    <div class="row">
                        @livewire('patient.patient-profile-about')
                        @livewire('patient.patient-profile-details')
                    </div>
                </div>
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
</x-app-layout>>
