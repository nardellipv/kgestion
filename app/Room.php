<?php

namespace kindergestion;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name', 'school_id',
    ];
}
