<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    public function neighbourhoods()
    {
        return $this->belongsToMany(Neighbourhood::class, 'committee_neighbourhood');
    }
    public function engineers()
    {
        return $this->belongsToMany(Engineer::class, 'committee_engineer')->withPivot('dateOfAppointment');
    }
}
