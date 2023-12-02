<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hotele;
use App\Reservation;

class Chambre extends Model
{
    protected $fillable = ['image'];
    public function hotele()
    {
        return $this->belongsTo(Hotele::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'chambre_id');
    }
}
