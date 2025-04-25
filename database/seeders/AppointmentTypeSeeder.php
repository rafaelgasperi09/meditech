<?php

namespace Database\Seeders;

use App\Models\AppointmentType;
use Database\Factories\AppointmentTypeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = AppointmentType::factory()->count(30)->create();

        foreach ($types as $t) {
            $this->command->info($t->name);
        }
    }
}
