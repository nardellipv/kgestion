<?php

namespace kindergestion;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'body', 'photo','status','slug'
    ];
}
