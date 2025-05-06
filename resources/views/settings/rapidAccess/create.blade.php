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
                                    <h4>  {{ __('Configurar acceso rapido de laboratorios.') }}</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="col-form-label col-lg-12"><b>{{__('Laboratorios') }}</b></label>
                                <div class="col-lg-12">
                                    <livewire:consultation.search-cpt-dropdown path="{{url('api/cpts/laboratory')}}" type="laboratory" key="labs"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="form-heading">
                                    <h4>  {{ __('Configurar acceso rapido de imagenes.') }}</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="col-form-label col-lg-12"><b>{{__('Imagenes') }}</b></label>
                                <div class="col-lg-12">
                                    <livewire:consultation.search-cpt-dropdown path="{{url('api/cpts/images')}}" type="images" key="images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="form-heading">
                                    <h4>  {{ __('Configurar acceso rapido de procedimientos.') }}</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="col-form-label col-lg-12"><b>{{__('Procedimientos') }}</b></label>
                                <div class="col-lg-12">
                                    <livewire:consultation.search-cpt-dropdown path="{{url('api/cpts/procedure')}}" type="procedure" key="procedure"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
