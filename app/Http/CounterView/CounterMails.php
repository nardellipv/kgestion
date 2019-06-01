<?php

namespace kindergestion\Http\CounterView;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use kindergestion\Message;

class CounterMails
{

    public function compose(View $view)
    {
        $message = Message::where('school_id', '=', Auth::User()->school_id)
            ->where('read', 'NOREAD')
            ->count();

        $view->with('message', $message);
    }
}