<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Neighbourhood extends Model
{
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    public function buildings()
    {
        return $this->hasMany(Building::class);
    }
    public function committees()
    {
        return $this->belongsToMany(Committee::class, 'committee_neighbourhood');
    }
}
