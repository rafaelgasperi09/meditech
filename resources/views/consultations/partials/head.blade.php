<div class="consultation-ficha">
    <div class="consultation-ficha-contenido">
        <div>
            <b>Consulta #</b> {{ $consultation->id }}
        </div>
        <div>
            <b>Fecha de Atención:</b> {{ $consultation->created_at }}
        </div>
    </div>
    <div class="consultation-ficha-contenido">
        <div>
            <b>Nombre del Paciente:</b>
            {!!  $patient->profile_name!!}
        </div>
        <div>
            <!-- transform $patient->birthdate date to years -->
            <b>Edad:</b> {{ \Carbon\Carbon::parse($patient->birthdate)->age }}
        </div>

        <div>
            <!-- transform $patient->birthdate date to years -->
            <b>Género:</b> {{ $patient->gender }}
        </div>

        <div>
            <!-- transform $patient->birthdate date to years -->
            <b>Seguro:</b> {{ $patient->patient_type }}
        </div>

        <div>
            <!-- transform $patient->birthdate date to years -->
            <b>Fecha Nacimiento:</b> {{ \Carbon\Carbon::parse($patient->birthdate)->format('d-m-Y') }}
        </div>

        <div>
            <!-- transform $patient->birthdate date to years -->
            <b>{{$patient->id_type}}:</b> {{ $patient->id_number }}
        </div>

    </div>
    <div class="consultation-ficha-contenido">
        <div>
            <b>Doctor:</b> {!! $appointment->user->profile_name  !!}</div>
            <div>
                <b>Especialidad:</b> {{ $appointment->medicalspeciality->name }}
            </div>
    </div>
</div>
<style>
    .consultation-ficha {
        width: 100%;
        display: flex;

        flex-wrap: wrap;
    }
    .consultation-ficha-contenido {
        border-radius: 5px;
        width: 100%;
        background-color: #fff;
        color: #003b62;
        padding: 10px;
        margin-bottom: 2px;
        font-size: 15px;
        display: flex;
        flex-wrap: nowrap;
        justify-content: flex-start;
        margin-bottom: 10px;
    }
    .consultation-ficha-contenido div {
        margin-left: 25px;
    }
    .profile-image{
        display: inline-block;
    }
</style>
