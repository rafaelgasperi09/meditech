<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Branch;
use App\Models\Client;
use App\Models\ConsultingRoom;
use App\Models\MedicalSpeciality;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $client = Client::whereHas('patients')->whereHas('users')->whereHas('branches')->inRandomOrder()->first();

        $day =  Carbon::parse(fake()->dateTimeBetween(now(),now()->addWeek(4)))->format('Y-m-d');
        $hour = fake()->randomElement([8,9,10,11,12,13,14,15,16,17,18,19,20]).":00:00";
        $start_date = Carbon::parse($day.' '.$hour)->format('Y-m-d H:i:s');
        $end_date = Carbon::parse($start_date)->addMinutes(fake()->randomElement([15,30,45,60]))->format('Y-m-d H:i:s');

        return [
           'start_date'=>$start_date,
           'end_date'=>$end_date,
           'client_id'=>$client->id,
           'status'=>'programada'
        ];
    }

    /**
     * Configure the model factory.
     */
    public function configure(): static
    {
        return $this->afterMaking(function (Appointment $a) {

            $patient = Patient::whereHas('clients',function ($q) use($a){ $q->whereClientId($a->client_id);})->inRandomOrder()->take(1)->first();
            $user = User::whereHas('clients',function ($q) use($a){ $q->whereClientId($a->client_id);})->inRandomOrder()->take(1)->first();
            $branch = Branch::whereHas('client',function ($q) use($a){ $q->whereClientId($a->client->id);})->inRandomOrder()->take(1)->first();
            $room = ConsultingRoom::whereBranchId($branch->id)->inRandomOrder()->take(1)->first();
            $medical_speciality = MedicalSpeciality::inRandomOrder()->take(1)->first();

            $a->patient_id = $patient->id;
            $a->user_id = $user->id;
            $a->branch_id = $branch->id;
            $a->consulting_room_id = $room->id;
            $a->created_by_name = $user->full_name;
            $a->medical_specialty_id = $medical_speciality->id;
            $a->save();
        });
    }
}
