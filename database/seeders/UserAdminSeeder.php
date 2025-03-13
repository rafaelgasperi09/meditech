<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'first_name' => 'Administrados',
            'last_name'  => 'Del Sistema',
            'email' => 'rgasperi@smartcarebilling.com',
            'password'=>'Prueba.1'
        ]);



    }
}
