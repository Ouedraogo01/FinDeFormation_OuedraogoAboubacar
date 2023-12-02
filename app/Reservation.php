<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Chambre;

class Reservation extends Model
{
    protected $fillable = ['user_id', 'chambre_id', 'hotele_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }
}
