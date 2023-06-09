<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    //use HasFactory;

    protected $fillable = [
        'photo',
        'first_name',
        'second_name',
        'thrid_name',
        'first_last_name',
        'second_last_name',
        'thrid_last_name',
        'birthday',
        'start',
        'end',
        'active',
        'comments',
    ];

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }

}
