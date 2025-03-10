<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Consulta') }}
        </h2>
    </x-slot>
    @foreach($data as $seccion=>$inputs)
    <div class="py-10">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>{{$seccion}}</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                   @foreach($inputs as $i)
                      <x-input-label  :value="$i->label" />
                        @if(in_array($i->type,['text','number','date']))
                            <x-text-input id="field_{{$i->id}}" name="{{$i->name}}" type="{{$i->type}}" class="mt-1 block w-full"/>
                      @elseif($i->type=='textarea')
                            <x-textarea-input id="field_{{$i->id}}" name="{{$i->name}}" type="text" class="mt-1 block w-full" rows="2" maxlength="{{$i->length}}"/>
                      @elseif($i->type=='list')
                            <div class="selector-btn-type">
                                    <livewire:selector-item list_type="{{$i->list_type}}" :key="$i->id"/>
                            </div>
                      @endif
                      <x-input-error :messages="$errors->get($i->name)" class="mt-2" />
                   @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
