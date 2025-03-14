<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Consulta') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Paciente</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="min-height: 500px;">
                <div class="p-6 text-gray-900">
                    <livewire:search-dropdown path="{{route('api.patients')}}"
                                              consultation_id="{{$consultation->id}}"
                                              is_patient="true"
                                              key="patient_name"/>
                </div>
            </div>
        </div>
    </div>
    @foreach($data as $seccion=>$inputs)
    <div class="py-10">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>{{$seccion}}</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >

                <div class="p-6 text-gray-900" style="min-height: 500px;">

                   @foreach($inputs as $i)
                       <div class="align-bottom">
                           @if($i->rapid_access)
                               <livewire:consultation.rapid-access :consultation_field_id="$i->id"/>
                           @endif
                           <x-input-label  :value="$i->label" />
                           @if(in_array($i->type,['text','number','date']))
                               <x-text-input id="field_{{$i->id}}" name="{{$i->name}}" type="{{$i->type}}" class="mt-1 block w-full"/>
                           @elseif($i->type=='textarea')
                               <x-textarea-input id="field_{{$i->id}}" name="{{$i->name}}" type="text" class="mt-1 block w-full bottom-0" rows="2" maxlength="{{$i->length}}"/>
                           @elseif($i->type=='list')
                               <div class="selector-btn-type">
                                   <livewire:selector-item list_type="{{$i->list_type}}" :key="$i->id"/>
                               </div>
                           @elseif($i->type=='api')
                               <livewire:search-dropdown path="{{$i->api_path}}"
                                                         consultation_field_id="{{$i->id}}"
                                                         consultation_id="{{$consultation->id}}"
                                                         :key="$i->id"/>
                           @endif
                           <x-input-error :messages="$errors->get($i->name)" class="mt-2" />
                       </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
