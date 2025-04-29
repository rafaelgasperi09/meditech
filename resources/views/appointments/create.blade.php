<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('appointment.titles') }}
                @endslot
                @slot('li_1')
                    Agendar {{ __('appointment.titles') }}
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="javascript:;">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>{{ __('generic.detail') }} {{ __('patient.title') }} </h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="input-block local-forms">
                                            <x-input-label for="patient" :value="__('patient.title')" required/>
                                            <livewire:patient.search-dropdown/>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>{{ __('generic.detail') }} {{ __('appointment.title') }}</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="input-block local-forms cal-icon">
                                            <x-input-label for="patient" :value="__('Fecha de ').__('appointment.title')" required/>
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="input-block local-forms">
                                            <x-input-label for="patient" :value="__('Hora Entrada')" required/>
                                            <div class="time-icon">
                                                <input type="text" class="form-control" id="datetimepicker3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="input-block local-forms">
                                            <x-input-label for="patient" :value="__('Hora Salida')" required/>
                                            <div class="time-icon">
                                                <input type="text" class="form-control" id="datetimepicker4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <x-input-label for="patient" :value="__('appointment.doctor')" required/>
                                            <livewire:search-dropdown path="{{route('api.users')}}"
                                                                      consultation_id="null"
                                                                      is_patient="false"
                                                                      key="doctor_id"/>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <x-input-label for="patient" :value="__('Especialidad')" required/>
                                            <livewire:search-dropdown path="{{route('api.medical_speciality')}}"
                                                                      consultation_id="null"
                                                                      is_patient="false"
                                                                      key="medical_speciality_id"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <x-input-label for="patient" :value="__('Procedimiento')" required/>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div class="input-block local-forms">
                                            <label>Notes <span class="login-danger">*</span></label>
                                            <textarea class="form-control" rows="3" cols="30"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit" class="btn btn-primary submit-form me-2">Submit</button>
                                            <button type="submit" class="btn btn-primary cancel-form">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
</x-app-layout>
