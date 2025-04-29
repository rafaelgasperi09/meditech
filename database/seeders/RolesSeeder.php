<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleSuperadmin = Role::create(['name' => 'administrador']);


        $modulos =['clientes','sucursales','consultorios','pacientes','agenda','configuraciones','formularios','medicinas','inventarios','usuarios'];

        foreach ($modulos as $m){
            $permission = Permission::create(['name' => $m]);
            $roleSuperadmin->givePermissionTo($permission);
            $permission->assignRole($roleSuperadmin);
        }

        $rolCliente = Role::create(['name' => 'cliente']);


        $modulos =['sucursales','consultorios','pacientes','agenda','configuraciones','formularios','medicinas','inventarios','usuarios'];

        foreach ($modulos as $m){
            $permission = Permission::where('name',$m)->first();
            $rolCliente->givePermissionTo($permission);
            $permission->assignRole($rolCliente);
        }

        $rolUsuario = Role::create(['name' => 'usuario']);


        $modulos =['pacientes','agenda','configuraciones','formularios','medicinas','inventarios'];

        foreach ($modulos as $m){
            $permission = Permission::where('name',$m)->first();
            $rolUsuario->givePermissionTo($permission);
            $permission->assignRole($rolUsuario);
        }

        $rolPaciente = Role::create(['name' => 'paciente']);


        $modulos =['agenda','clientes'];

        foreach ($modulos as $m){
            $permission = Permission::where('name',$m)->first();
            $rolPaciente->givePermissionTo($permission);
            $permission->assignRole($rolPaciente);
        }

        $rolAsistente = Role::create(['name' => 'asistente']);


        $modulos =['agenda'];

        foreach ($modulos as $m){
            $permission = Permission::where('name',$m)->first();
            $rolAsistente->givePermissionTo($permission);
            $permission->assignRole($rolAsistente);
        }

    }
}
