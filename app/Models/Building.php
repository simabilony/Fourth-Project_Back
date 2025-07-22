<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    public function neighbourhood()
    {
        return $this->belongsTo(Neighbourhood::class);
    }
    public function foundations()
    {
        return $this->hasMany(Foundation::class);
    }
    public function damageReports()
    {
        return $this->hasMany(DamageReport::class);
    }
}
