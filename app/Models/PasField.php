<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasField extends Model
{
    use HasFactory;

    public function farm()
    {
        return $this->belongsTo(Farm::class);
    }

    public function soilHealth()
    {
        return $this->hasMany(PasSoilHealth::class);
    }
}
