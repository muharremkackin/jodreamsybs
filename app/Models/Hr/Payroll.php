<?php

namespace App\Models\Hr;

use App\Personal;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $table = 'hr_payroll';

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
