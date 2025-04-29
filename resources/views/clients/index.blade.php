<x-app-layout>

    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('client.titles') }}
                @endslot
                @slot('li_1')
                        {{ __('client.titles') }} List
                @endslot
            @endcomponent
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table show-entire">
                        <div class="card-body">

                    <livewire:data-table model="{{$model}}"
                                         :columns="['id', 'profile_name', 'ruc','dv','email','whatsapp','acciones']"
                                         :actions="['edit','delete']"
                                         routename="client"
                                         wire:key="{{\Illuminate\Support\Str::random(5)}}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
