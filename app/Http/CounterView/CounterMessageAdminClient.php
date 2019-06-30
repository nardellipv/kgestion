<?php
/**
 * Created by PhpStorm.
 * User: narde
 * Date: 30/6/2019
 * Time: 19:05
 */

namespace kindergestion\Http\CounterView;


use Illuminate\Support\Facades\Auth;
use kindergestion\MessageAdminClient;
use Illuminate\View\View;

class CounterMessageAdminClient
{
    public function compose(View $view)
    {
        $messageAdminClient = MessageAdminClient::where('school_id', Auth::User()->school_id)
            ->orWhere('school_id', NULL)
            ->count();

        $view->with('messageAdminClient', $messageAdminClient);
    }
}