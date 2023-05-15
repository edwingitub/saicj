<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class License extends Model
{
    use HasFactory;

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class,'id','employee_id');
    }

    public function license_type(): HasOne
    {
        return $this->hasOne(LicenseType::class,'id','license_type_id');
    }

    public function license_state(): HasOne
    {
        return $this->hasOne(LicenseState::class,'id','license_state_id');
    }
}
