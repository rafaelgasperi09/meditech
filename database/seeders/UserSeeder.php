<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $uClients = User::factory()->count(20)->create(['password'=>'test']);

        foreach ($uClients as $client) {
            $this->command->info($client);
        }
    }
}
