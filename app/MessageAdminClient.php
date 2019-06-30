<?php

namespace kindergestion;

use Illuminate\Database\Eloquent\Model;

class MessageAdminClient extends Model
{
    protected $fillable = [
        'title', 'body', 'school_id'
    ];
}
