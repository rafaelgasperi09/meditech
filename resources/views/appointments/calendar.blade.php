<x-app-layout>
    @section('scripts')
        <script src="{{url('bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{url('bower_components/moment/locale/es.js')}}"></script>
        <script src="{{url('fullcalendar/dist/index.global.min.js')}}"></script>
        <script src="{{url('fullcalendar/locales/es.js')}}"></script>
    @stop
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block" >
            {{ __('appointment.calendar') }}

        </h2>
        <x-primary-link class="ms-3 float-right" type="button" href="{{route('user.create')}}">
            {{ __('Programar Cita') }}
        </x-primary-link>
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
