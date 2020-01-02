<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'id_room';

    public function booking(){
        return $this->belongsTo('App\Booking');
    }
}
