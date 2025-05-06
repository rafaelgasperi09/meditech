<x-app-layout>
@section('scripts')
    <script src="{{url('bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{url('bower_components/moment/locale/es.js')}}"></script>
    <script src="{{url('fullcalendar/dist/index.global.min.js')}}"></script>
    <script src="{{url('fullcalendar/locales/es.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@stop
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard </a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Calendario</li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-8 text-end m-b-30">
                        <a href="javascript:;" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#add_event"><i class="fa fa-plus"></i> {{__('appointment.booking')}}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box mb-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id='calendario'></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade none-border" id="add_event">
                            <div class="modal-dialog">
                                <form method="post" action="{{ route('appointment.store') }}" class="p-6">
                                <div class="modal-content modal-md">
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{__('appointment.booking')}}</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-block local-forms">
                                            <x-input-label for="start_date" :value="__('Fecha')" />
                                            <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" />
                                            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                                        </div>
                                        <div class="input-block local-forms">
                                            <x-input-label for="patient" :value="__('Hora Entrada')" required/>
                                            <div class="time-icon">
                                                <input type="text" class="form-control" id="datetimepicker3">
                                            </div>
                                        </div>
                                        <div class="input-block local-forms">
                                            <x-input-label for="patient" :value="__('Hora Salida')" required/>
                                            <div class="time-icon">
                                                <input type="text" class="form-control" id="datetimepicker4">
                                            </div>
                                        </div>
                                        <div class="input-block local-forms">
                                            <x-input-label for="patient_id" :value="__('patient.title')" />
                                            <x-select-input name="patient_id" :options="\App\Models\Patient::get()->pluck('full_name','id')->toArray()"  class="block w-full"/>
                                            <x-input-error :messages="$errors->get('patient_id')" class="mt-2" />
                                        </div>

                                        <div class="input-block local-forms">
                                            <x-input-label for="branch_id" :value="__('Sucursal')" />
                                            <x-select-input name="branch_id" :options="\App\Models\Branch::pluck('name','id')->toArray()"  class="block w-full"/>
                                            <x-input-error :messages="$errors->get('branch_id')" class="mt-2" />
                                        </div>
                                        <div class="input-block local-forms">
                                            <x-input-label for="consulting_room_id" :value="__('Consultorio')" />
                                            <x-select-input name="consulting_room_id" :options="\App\Models\ConsultingRoom::pluck('name','id')->toArray()"  class="block w-full"/>
                                            <x-input-error :messages="$errors->get('consulting_room_id')" class="mt-2" />
                                        </div>
                                        <div class="input-block local-forms">
                                            <x-input-label for="medical_specialty_id" :value="__('Especialidad')" />
                                            <x-select-input name="medical_specialty_id" :options="\App\Models\MedicalSpeciality::pluck('name','id')->toArray()"  class="block w-full"/>
                                            <x-input-error :messages="$errors->get('medical_specialty_id')" class="mt-2" />
                                        </div>
                                        <div class="input-block local-forms">
                                            <x-input-label for="procedure" :value="__('Procedimiento')" required/>
                                            <x-select-input name="consulting_room_id" :options="\App\Models\AppointmentType::pluck('name','id')->toArray()"  class="block w-full"/>
                                        </div>
                                    </div>
                                    <div class="modal-footer text-center">
                                        <button type="button" class="btn btn-primary submit-btn save-event">{{__('generic.save')}}</button>
                                        <button type="button" class="btn btn-danger btn-lg delete-event" data-bs-dismiss="modal">{{__('generic.cancel')}}</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var calendarEl = document.getElementById('calendario');

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
