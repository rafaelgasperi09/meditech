<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Models\Patient;
use Illuminate\Console\Command;

class addPatientToClient extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-patient-to-client';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para agregar pacientes de forma ramdom a los clientes.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach (Patient::get() as $p){

            $client = Client::inRandomOrder()->take(1)->first();

            $client->patients()->sync($p->id,['created_at'=>now(),'updated_at'=>now()]);

            $this->info('Se agrego el paciente '.$p->full_name.' al cliente '.$client->name);
        }
    }
}
