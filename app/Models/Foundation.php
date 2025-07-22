<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foundation extends Model
{
    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
