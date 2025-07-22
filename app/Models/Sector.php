<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    public function neighbourhoods()
    {
        return $this->hasMany(Neighbourhood::class);
    }
}
