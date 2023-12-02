<?php

namespace App;

use App\Chambre;

use Illuminate\Database\Eloquent\Model;

class Hotele extends Model
{
    protected $fillable = [
        'photo'
    ];

    public function chambres()
    {
        return $this->hasMany(Chambre::class, "chambre_id");
    }
}
