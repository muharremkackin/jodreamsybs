<?php

namespace App\Models\Hr;

use App\Personal;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'hr_positions';

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function personals()
    {
        return $this->hasMany(Personal::class);
    }
}
