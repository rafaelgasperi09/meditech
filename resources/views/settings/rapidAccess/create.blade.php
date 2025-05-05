<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('Configuraciones') }}
                @endslot
                @slot('li_1')
                    {{ __('Accesos Rapidos') }}
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="form-heading">
                                    <h4>  {{ __('Configurar acceso rapido de procedimientos , imagenes y laboratorios.') }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block row">
                                    <label class="col-form-label col-lg-2">{{__('Laboratorios') }}</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <livewire:consultation.search-cpt-dropdown path="{{url('api/cpts/laboratory')}}" type="laboratory"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-block row">
                                    <label class="col-form-label col-lg-2">{{__('Imagenes') }}</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <livewire:consultation.search-cpt-dropdown path="{{url('api/cpts/images')}}" type="image"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-block row">
                                    <label class="col-form-label col-lg-2">{{__('Procedimientos') }}</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <livewire:consultation.search-cpt-dropdown path="{{url('api/cpts/procedure')}}" type="procedure"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
