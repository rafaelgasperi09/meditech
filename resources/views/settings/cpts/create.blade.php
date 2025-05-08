<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('Configuraciones') }}
                @endslot
                @slot('li_1')
                   {{ __('Plantilla Consulta') }}
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="form-heading">
                                    <h4>  {{ __('Configurar campos de consulta') }}</h4>
                                </div>
                            </div>
                            <livewire:item-transfer/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
