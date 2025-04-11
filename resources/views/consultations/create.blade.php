<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Consulta') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="paciente">
            <h1>Paciente</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="min-height: 100px;">
                <div class="p-6 text-gray-900">
                    <livewire:search-dropdown path="{{route('api.patients')}}"
                                              consultation_id="{{$consultation->id}}"
                                              is_patient="true"
                                              key="patient_name"/>
                </div>
            </div>
        </div>
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>{{$seccion}}</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >

                <div class="p-6 text-gray-900" style="min-height: 100px;">

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
<style>
        .floatmenu{
            background: #2323ff;  /* Fondo, debe ser más claro que el borde */
            border: 5px outset #006dba;  /* Grosor del Borde */  /* Color del Borde */
            color: white;  /* Color del texto */
            text-align: center;  /* Alineación del texto */
            text-shadow: -1px -1px rgba(0,0,0,.2);
            width:10%;position:fixed;
            height:80vh;
            background:#005dba;
            top:140px;
            right:0px;
            border-radius:10px 0 0 25px
        }
        .buttons{
            border: 5px outset #006dba;  /* Grosor del Borde */  /* Color del Borde */
            text-shadow: -1px -1px rgba(0,0,0,.2);
            color: white; 
            background:#2079d1;
            padding:4px;
            width: 100%;
            border-radius: 10px;
            margin-bottom: 1px;
        }
        .btnselected{
            background:rgb(231, 231, 231);
            color: #006dba;
        }
        html {
        scroll-behavior: smooth;
        }
        a:active
        {
            color:black;
            background: white;
        }
    </style>
    <div class="floatmenu">
        <div class="row">
            <div class="col-md-12">
                <ul class="space-y-1">
                    <li>
                        <a href="#paciente"  class="flex items-center gap-2 rounded-lg bg-gray-100 px-4 py-2 text-gray-700 buttons btnglobal">
                        <span class="text-sm font-medium"> Ver datos del paciente </span>
                        </a>
                    </li>
                @php $i=0; @endphp
                @foreach($listado as $k=>$v)
                @php $i++; @endphp
                    <li>
                        <a  href="#{{ $k }}"  class="flex items-center gap-2 rounded-lg bg-gray-100 px-4 py-2 text-gray-700 buttons btnglobal" id="button{{ $i }}">
                        <span class="text-sm font-medium"> {{ $v }}</span>
                        </a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
    <script>
        $('.btnglobal').on('click',function(){
            $('.btnglobal').removeClass('btnselected');
            $('.btnglobal').addClass('buttons');
            $(this).removeClass('buttons');
            $(this).addClass('btnselected');
        });
    </script>