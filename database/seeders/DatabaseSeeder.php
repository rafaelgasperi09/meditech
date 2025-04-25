<?php

namespace Database\Seeders;

use App\Models\ConsultationList;
use App\Models\ConsultationSusgestion;
use App\Models\RapidAccess;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->call(UserAdminSeeder::class);
        $this->call(CptAreaSeeder::class);
        $this->call(CptSeeder::class);
        $this->call(InsuranceSeeder::class);
        $this->call(MedicalSpecialitySeeder::class);
        $this->call(MedicineSeeder::class);
        $this->call(ConsultationListSeeder::class);
        $this->call(ConsultationFieldSeeder::class);
        $this->call(ConsultationSusgestionSeeder::class);
        $this->call(RapidAccessSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(DiagnosticSeeder::class);
        $this->call(AppointmentTypeSeeder::class);
    }
}
