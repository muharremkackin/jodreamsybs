<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $table = 'hr_leaves';

    public function category()
    {
        return $this->belongsTo(LeaveCategory::class);
    }
}
