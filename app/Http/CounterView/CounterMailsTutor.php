<?php

namespace kindergestion\Http\CounterView;

use Illuminate\Support\Facades\Auth;
use kindergestion\Comunication;
use Illuminate\View\View;
use kindergestion\Tutor;

class CounterMailsTutor
{
    public function compose(View $view)
    {
        $tutorId = Tutor::where('email', Auth::user()->email)
            ->first();
        $messageTutor = Comunication::where('tutor_id', $tutorId->id)
            ->where('read', 'NOREAD')
            ->count();
        $view->with('messageTutor', $messageTutor);
    }
}