<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('user.titles') }}
                @endslot
                @slot('li_1')
                        {{ __('generic.list') }} {{ __('user.titles') }}
                @endslot
            @endcomponent
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table show-entire p-0 table-dash">
                        <div class="card-body">
                            <div class="table-responsive">
                            <livewire:data-table model="{{$model}}"
                                                 :columns="['id', 'full_name', 'email','acciones']"
                                                 :actions="['edit','delete']"
                                                 routename="user"
                                                 wire:key="{{\Illuminate\Support\Str::random(5)}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
