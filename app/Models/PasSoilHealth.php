<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasSoilHealth extends Model
{
    use HasFactory;

    public function field()
    {
        return $this->belongsTo(PasField::class);
    }
}
