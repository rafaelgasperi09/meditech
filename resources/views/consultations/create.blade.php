<x-app-layout>
    @section('css')
        <link href="{{url('styles/consultations.css')}}" rel="stylesheet" />
    @stop
    <div class="page-wrapper">
        <div class="content">

                <div class="col-md-10" id="paciente">
                    @if(empty($consultation->patient))
                    <h1>Paciente</h1>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="min-height: 100px;">
                        <div class="p-6 text-gray-900">
                            <livewire:search-dropdown path="{{route('api.patients')}}"
                                                      consultation_id="{{$consultation->id}}"
                                                      is_patient="true"
                                                      key="patient_name"/>
                        </div>
                    </div>
                    @else
                        @include('consultations.partials.head',array('patient'=>$patient,'appointment'=>$appointment))
                    @endif
                </div>

            @php
            $listado=array();
            @endphp
            @foreach($data as $seccion=>$inputs)
            @php
            $slug=\Illuminate\Support\Str::slug($seccion);
            $listado[$slug]=$seccion;

            @endphp
            <div class="py-2"  id="{{ $slug }}">
                <div class="col-md-10">
                    <h1>{{$seccion}}</h1>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                        <span id="menu-marker-{{$loop->index}}" class="menu-maker"></span>
                        <div class="p-6 text-gray-900" style="min-height: 100px;" id="marker-id-{{$loop->index}}">
                           @foreach($inputs as $i)
                               <div class="align-bottom">
                                   @if($i->rapid_access)
                                       <livewire:consultation.rapid-access :consultation_field_id="$i->id"/>
                                   @endif
                                   <x-input-label  :value="$i->label" />
                                   @if(in_array($i->type,['text','number','date']))
                                       <x-text-input id="field_{{$i->id}}" name="{{$i->name}}" type="{{$i->type}}" class="mt-1 block w-full" onclick="scroll_this(this)"/>
                                   @elseif($i->type=='textarea')
                                       <x-textarea-input id="field_{{$i->id}}" name="{{$i->name}}" type="text" class="mt-1 block w-full bottom-0" rows="2" maxlength="{{$i->length}}" onclick="scroll_this(this)"/>
                                   @elseif($i->type=='list')
                                       <div class="selector-btn-type">
                                           <livewire:selector-item list_type="{{$i->list_type}}" :key="$i->id" onclick="scroll_this(this)"/>
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
        </div>
    </div>
    @include('consultations.partials.side_menu')
    @include('consultations.partials.patient_info',array('id'=>$patient->id))
</x-app-layout>
