<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block" >
            {{ __('client.titles') }}

        </h2>
        <x-primary-link  type="button" href="{{route('client.create')}}" class="ms-3 float-right">
            {{ __('label.new') }}
        </x-primary-link>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <livewire:data-table model="{{$model}}"
                                         :columns="['id', 'name', 'ruc','dv','email','whatsapp','acciones']"
                                         :actions="['edit','delete']"
                                         routename="client"
                                         wire:key="{{\Illuminate\Support\Str::random(5)}}"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
