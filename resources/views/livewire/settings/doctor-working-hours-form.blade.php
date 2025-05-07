<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit.prevent="save" class="space-y-4">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6">
                <div class="input-block local-forms">
                    <x-input-label for="branch_id" :value="__('Sucursal')" />
                    <x-select-input name="branch_id" :options="\App\Models\Branch::pluck('name','id')->toArray()"  class="block w-full" wire:model="branch_id"/>
                    <x-input-error :messages="$errors->get('branch_id')" class="mt-2" />
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-6">
                <div class="input-block local-forms">
                    <x-input-label for="consulting_room_id" :value="__('Consultorio')" />
                    <x-select-input  name="consulting_room_id" :options="\App\Models\ConsultingRoom::pluck('name','id')->toArray()"  class="block w-full" wire:model="consulting_room_id"/>
                    <x-input-error :messages="$errors->get('consulting_room_id')" class="mt-2" />
                </div>
            </div>
        </div>

        @foreach($workingHours as $day => $config)
            <div class="flex items-center space-x-2">
                <div class="col-12 col-md-6 col-xl-1 p-3">
                    <input type="checkbox"  wire:model="workingHours.{{$day}}.enabled" wire:click="changeEnabled('{{$day}}')" style="display: inline-block">
                    <label>{{ucfirst($day)}}</label>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="input-block local-forms">
                        <x-input-label for="patient" :value="__('Hora Entrada')" required/>

                            <input id="start-{{ $day }}"
                                   type="text" wire:model="workingHours.{{$day}}.start"
                                   class="form-control p-2 datetimepicker3" {{ $config['enabled'] ? '' : 'disabled' }}>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="input-block local-forms">
                        <x-input-label for="patient" :value="__('Hora Salida')" required/>

                            <input type="time"    wire:model="workingHours.{{$day}}.end"
                                   class="form-control" {{ $config['enabled'] ? '' : 'disabled' }} >

                    </div>
                </div>
            </div>
        @endforeach
        <div class="flex items-center justify-end mt-4">
            <div class="doctor-submit text-end">
                <button type="submit" class="btn btn-primary submit-form me-2">     {{ __('button.register') }} </button>
                @if (session()->has('message'))
                    <a href="javascript: void(0);" id="alert-success" class="btn btn-success btn-sm waves-effect waves-light">{{ session('message') }}</a>
                @endif
            </div>
        </div>
    </form>
</div>
