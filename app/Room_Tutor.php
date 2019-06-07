<?php

namespace kindergestion;

use Illuminate\Database\Eloquent\Model;

class Room_Tutor extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'room_id', 'tutor_id'
    ];

    public function Room()
    {
        return $this->hasMany(Room::class);
    }

    public function Tutor()
    {
        return $this->hasMany(Tutor::class);
    }
}
