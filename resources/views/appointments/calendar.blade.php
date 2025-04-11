<x-app-layout>
    @section('scripts')
        <script src="{{url('bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{url('bower_components/moment/locale/es.js')}}"></script>
        <script src="{{url('fullcalendar/dist/index.global.min.js')}}"></script>
        <script src="{{url('fullcalendar/locales/es.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @stop
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block" >
            {{ __('appointment.calendar') }}

        </h2>
        <x-primary-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'crear_cita')"
        >  {{ __('Programar Cita') }}</x-primary-button>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
        <x-modal name="crear_cita" >
            <form method="post" action="{{ route('appointment.store') }}" class="p-6">
                <h1>Agendar Cita</h1>
                <x-text-input id="" class="block mt-1 w-full" type="hidden" name="client_id" :value="auth()->user()->clients()->first()->id" />
                <x-text-input id="" class="block mt-1 w-full" type="hidden" name="user_id" :value="auth()->user()->id" />
                @csrf
                <div class="mt-6">
                    <div>
                        <x-input-label for="start_date" :value="__('Fecha')" />
                        <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" />
                        <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="patient_id" :value="__('patient.title')" />
                        <x-select-input name="patient_id" :options="\App\Models\Patient::get()->pluck('full_name','id')->toArray()"  class="block w-full"/>
                        <x-input-error :messages="$errors->get('patient_id')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="branch_id" :value="__('Sucursal')" />
                        <x-select-input name="branch_id" :options="\App\Models\Branch::pluck('name','id')->toArray()"  class="block w-full"/>
                        <x-input-error :messages="$errors->get('branch_id')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="consulting_room_id" :value="__('Consultorio')" />
                        <x-select-input name="consulting_room_id" :options="\App\Models\ConsultingRoom::pluck('name','id')->toArray()"  class="block w-full"/>
                        <x-input-error :messages="$errors->get('consulting_room_id')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="medical_speciality_id" :value="__('Especialidad')" />
                        <x-select-input name="medical_speciality_id" :options="\App\Models\MedicalSpeciality::pluck('name','id')->toArray()"  class="block w-full"/>
                        <x-input-error :messages="$errors->get('medical_speciality_id')" class="mt-2" />
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('button.cancel') }}
                    </x-secondary-button>

                    <x-primary-button class="ms-3">
                        {{ __('button.save') }}
                    </x-primary-button>
                </div>
            </form>
        </x-modal>
<script>
 document.addEventListener('DOMContentLoaded', function() {

        var calendarEl = document.getElementById('calendar');

        myCalendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            slotMinTime: "08:00",
            slotMaxTime: "20:00",
            initialView:'timeGridWeek',
            slotDuration: '00:15:00',
            locale: 'es',
            initialDate:new Date(),
            navLinks: true, // can click day/week names to navigate views
            lazyFetching:false,
            timeFormat: 'HH:mm',
            axisFormat: 'HH:mm',
            businessHours: [
                {
                    start: moment().format('HH:mm'),
                    daysOfWeek: [ 1, 2, 3,4,5 ], // Monday, Tuesday, Wednesday
                    startTime: '08:00:00', // 8am
                    endTime: '23:00:00' // 8pm
                },
                {
                    start: moment().format('HH:mm'),
                    daysOfWeek: [ 6 ], // Thursday, Friday
                    startTime: '08:00:00', // 10am
                    endTime: '23:00:00' // 8pm
                }
            ],
            eventConstraint:"businessHours",
            eventSources: [
                {
                    url: "{{ route('appointment.calendar',array('ajax'=>true)) }}",
                    method: 'GET',
                    extraParams: {
                        start:  moment({{$desde}}).format('YYYY-MM-DD'),
                        end:  moment({{$hasta}}).format('YYYY-MM-DD'),
                        patient_id: '{{request()->get('patient_id')}}',
                        client_id:  '{{request()->get('client_id')}}',
                        consulting_room_id:  '{{request()->get('consulting_room_id')}}',
                        status: '{{request()->get('status')}}',
                    },
                    failure: function(message){
                        // [Log] {message: "Request failed", xhr: XMLHttpRequest} (calendar, line 14555)
                        message = message.message;
                        if(message != 'Request failed') {
                            window.location.replace("{{route('appointment.calendar',array('ajax'=>true))}}");
                        }

                    },
                }
            ],
        });

        myCalendar.render();

        setInterval(function () {
            myCalendar.refetchEvents();
        }, 10000);
    });
</script>
</x-app-layout>
