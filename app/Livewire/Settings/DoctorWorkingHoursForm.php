<?php

namespace App\Livewire\Settings;

use App\Models\UserWorkingHour;
use Carbon\Carbon;
use Livewire\Component;

class DoctorWorkingHoursForm extends Component
{

    public $workingHours = [];
    public $star_times = [];
    public $end_times = [];
    public $clientId;
    public $consulting_room_id;
    public $branch_id;

    public function mount()
    {
        if(auth()->user()->clients()->first()){
            $this->clientId = auth()->user()->clients()->first()->id;
        }
        $days = [__('lunes'), __('martes'),__('miercoles'), __('jueves'), __('viernes'), __('sabado'), __('domingo')];
        foreach ($days as $day) {
            $this->workingHours[$day] = [
                'enabled' => false,
                //'start' => Carbon::parse('7:00')->format('h:i A'),
                //'end' =>  Carbon::parse('18:00')->format('h:i A'),
                'start' => '08:00',
                'end' =>  '18:00',
            ];
        }

        // Opcional: cargar los horarios actuales del médico
        $existing = UserWorkingHour::where('user_id', auth()->id())->get();
        foreach ($existing as $item) {
            $this->workingHours[$item->day_of_week] = [
                'enabled' => true,
                'start' => substr($item->start_time, 0, 5),
                'end' => substr($item->end_time, 0, 5),
            ];
        }

    }

    public function save()
    {

        dd($this->workingHours,$this->star_times,$this->end_times);


        UserWorkingHour::where('user_id', auth()->id())->delete();


        foreach ($this->workingHours as $day => $config) {
            dd($config);
            if ($config['enabled']) {
                UserWorkingHour::create([
                    'user_id' => auth()->id(),
                    'client_id'=> $this->clientId,
                    'branch_id' => $this->branch_id,
                    'consulting_room_id'=> $this->consulting_room_id,
                    'day_of_week' => $day,
                    'start_time' => Carbon::parse($config['start'])->format('H:i'),
                    'end_time' => Carbon::parse($config['end'])->format('H:i'),
                ]);
            }
        }

        session()->flash('message', 'Horario actualizado con éxito.');
    }

    public function changeEnabled($day){

        $this->workingHours[$day]['enabled']=$this->workingHours[$day]['enabled'];
    }

    public function setStartDayTime($day){
        dd($this->workingHours[$day]);
        $this->workingHours[$day]['start']=$this->workingHours[$day]['start'];
    }
    public function render()
    {
        return view('livewire.settings.doctor-working-hours-form');
    }
}
