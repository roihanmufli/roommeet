<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{
    protected $primaryKey = 'id_booking';

    protected $fillable = ['user_id','id_room','tgl_pinjam','jam_awal','jam_akhir','alasan'];

    public function user(){
        return $this->belongsTo('App\User');
    }



    public function rooms(){
        return $this->hasMany('App\Room','foreign_key');
    }
}
