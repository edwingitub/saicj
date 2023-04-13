<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Job extends Model
{
    use HasFactory;

    public function office(): HasOne
    {
        return $this->hasOne(Office::class,'id','office_id');
    }

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class,'id','employee_id');
    }

    public function jobType(): HasOne
    {
        return $this->hasOne(JobType::class,'id','job_type_id');
    }


}

