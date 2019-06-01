<?php

namespace kindergestion\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use kindergestion\School;
use kindergestion\User;

class SchoolPolicy
{
    use HandlesAuthorization;

    public function pass(User $user, School $school)
    {
        return $user->school_id === $school->id;
    }

}
