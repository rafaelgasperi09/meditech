<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientDiagnostic extends BaseModel
{
    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function diagnostic(){
        return $this->belongsTo(Diagnostic::class);
    }
}
