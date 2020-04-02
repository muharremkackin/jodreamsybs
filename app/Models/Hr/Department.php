<?php

namespace App\Models\Hr;

use App\Personal;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'hr_departments';

    public function positions()
    {
        return $this->hasMany(Position::class);
    }

    public function personals()
    {
        return $this->hasMany(Personal::class);
    }
}
