<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block" >
            {{ __('patient.titles') }}

        </h2>
        <x-primary-link class="ms-3 float-right" type="button" href="{{route('patient.create')}}">
            {{ __('label.new') }}
        </x-primary-link>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <livewire:data-table model="{{$model}}"
                                         :columns="['id', 'full_name', 'birthdate','full_id_number','email','whatsapp','acciones']"
                                         :actions="['edit','delete']"
                                         routename="patient"
                                         sortField="first_name"
                                         sortDirecction="asc"
                                         wire:key="{{\Illuminate\Support\Str::random(5)}}"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
