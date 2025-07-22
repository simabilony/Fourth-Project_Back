<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    public function committees()
    {
        return $this->belongsToMany(Committee::class, 'committee_engineer')->withPivot('dateOfAppointment');
    }
}
