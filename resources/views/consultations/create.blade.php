<x-app-layout>
    @section('css')
        <link href="{{url('styles/consultations.css')}}" rel="stylesheet" />
    @stop
    <div class="page-wrapper">
        <div class="content">
            <div class="col-md-10" id="paciente">
                @include('consultations.partials.head',array('patient'=>$patient,'appointment'=>$appointment))
            </div>
            @php
            $listado=array();
            @endphp
            @foreach($template as $seccion=>$inputs)
            @php
            $slug=\Illuminate\Support\Str::slug($seccion);
            $listado[$slug]=$seccion;

            @endphp
            <div class="py-2"  id="{{ $slug }}">
                <div class="col-md-10">
                    <h3>{{$seccion}}</h3>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                        <span id="menu-marker-{{$loop->index}}" class="menu-maker"></span>
                        <div class="p-6 text-gray-900" style="min-height: 100px;" id="marker-id-{{$loop->index}}">
                           @foreach($inputs as $i)
                               <div class="align-bottom">
                                   @if($i['input']->rapid_access)
                                       <livewire:consultation.rapid-access :consultation_field_id="$i['input']->id"/>
                                   @endif
                                   <x-input-label  :value="$i['input']->label" />
                                   @if(in_array($i['input']->type,['text','number','date']))
                                       <x-text-input id="field_{{$i['input']->id}}" name="{{$i['input']->name}}" type="{{$i['input']->type}}" class="mt-1 block w-full" onclick="scroll_this(this)" value="{{$i['data']->first()->value}}"/>
                                   @elseif($i['input']->type=='textarea')
                                           <x-textarea-input id="field_{{$i['input']->id}}" name="{{$i['input']->name}}" type="text" class="mt-1 block w-full bottom-0" rows="2" maxlength="{{$i['input']->length}}" onclick="scroll_this(this)">{{$i['data']->first()->value}}</x-textarea-input>
                                   @elseif($i['input']->type=='list')
                                       <div class="selector-btn-type">
                                           <livewire:selector-item list_type="{{$i['input']->list_type}}" :actives="$i['data']" :key="$i['input']->id" onclick="scroll_this(this)"/>
                                       </div>
                                   @elseif($i['input']->type=='api')
                                       <livewire:search-dropdown path="{{$i['input']->api_path}}"
                                                                 consultation_field_id="{{$i['input']->id}}"
                                                                 consultation_id="{{$consultation->id}}"
                                                                 :selectedLists="$i['data']"
                                                                 :key="$i['input']->id"/>
                                   @endif
                                   <x-input-error :messages="$errors->get($i['input']->name)" class="mt-2" />
                               </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('consultations.partials.side_menu')
    @include('consultations.partials.patient_info',array('id'=>$patient->id))
</x-app-layout>
