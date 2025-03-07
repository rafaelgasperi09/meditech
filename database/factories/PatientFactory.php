<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Insurance;
use App\Models\Patient;
use App\Models\PatientClient;
use App\Models\PatientInsurance;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->name(),
            'last_name' => fake()->lastName(),
            'id_type'=>fake()->randomElement(['CC','CE','PA','PT']),
            'id_number'=>fake()->randomNumber(7),
            'birthdate'=>fake()->date('Y-m-d'),
            'gender'=>fake()->randomElement(['M','F']),
            'physical_address'=>fake()->address,
            'billing_address'=>fake()->streetAddress,
            'phone'=>fake()->phoneNumber,
            'whatsapp'=>fake()->phoneNumber,
            'email' => fake()->unique()->safeEmail(),
            'blood_type'=>fake()->randomElement(['A+','A-','B+','B-','AB+','AB-','0+','0-','RH+','RH-']),
            'status'=>fake()->randomElement(['NORMAL','BUENO','MALO']),
        ];
    }

    /**
     * Configure the model factory.
     */
    public function configure(): static
    {
        return $this->afterCreating(function (Patient $p) {
           PatientClient::create([
               'patient_id'=>$p->id,
               'client_id'=>Client::inRandomOrder()->take(1)->first()->id
           ]);

           PatientInsurance::create([
               'patient_id'=>$p->id,
               'insurance_id'=>Insurance::inRandomOrder()->take(1)->first()->id,
               'policy_number'=>fake()->randomNumber(7),
               'cetificate_number'=>fake()->randomNumber(5),
               'plan'=>fake()->text(50),
               'copago'=>fake()->numberBetween(10,500),
               'date_of_issue'=>Carbon::parse(fake()->dateTimeBetween(-2))->format('Y-m-d'),
               'expire_at'=>Carbon::parse(fake()->dateTimeBetween(now()->subYear(1),now()->addYear(1)))->format('Y-m-d'),
           ]);
        });
    }
}
