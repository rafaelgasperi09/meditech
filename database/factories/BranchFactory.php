<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Client;
use App\Models\ConsultingRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id'=>Client::inRandomOrder()->take(1)->first()->id,
            'name'=>fake()->name,
            'phone'=>fake()->phoneNumber,
            'address'=>fake()->address,
            'type'=>fake()->randomElement(['clinica','hospital','centro de salud','consultorio']),
        ];
    }

    /**
     * Configure the model factory.
     */
    public function configure(): static
    {
        return $this->afterCreating(function (Branch $b) {
            $cant=1;
            if($b->type=='hospital') $cant=10;
            if($b->type=='clinica') $cant=5;
            if($b->type=="centro de salud") $cant=2;

            for($i=1;$i<=$cant;$i++){
                $floor = fake()->randomNumber(2);
                ConsultingRoom::create([
                    'branch_id'=>$b->id,
                    'name'=>'CONSULTORIO '.$i,
                    'number'=>$floor.'-'.$i,
                    'floor'=>$floor,
                ]);
            }
        });
    }
}
