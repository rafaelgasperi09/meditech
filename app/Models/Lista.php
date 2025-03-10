<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    public static function bloodTypes(){

        return [
            'A+'=>'A+',
            'A-'=>'A-',
            'B+'=>'B+',
            'B-'=>'B-',
            'AB+'=>'AB+',
            'AB-'=>'AB-',
            'O+'=>'0+',
            'O-'=>'0-',
            'RH+'=>'RH+',
            'RH-'=>'RH-',
        ];
    }

    public static function documentType(){

        return [
            'PA+'=>'PA: Pasaporte',
            'CC'=>'CC: Cédula de ciudadania',
            'CE'=>'CE: Cédula extranjera',
            'PT'=>'PT: Permiso temporal de permanencia',
        ];
    }

    public static function gender(){

        return [
            'M'=>'Masculino',
            'F'=>'Femenino',
        ];
    }
}
