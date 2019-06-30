<?php

namespace kindergestion\Http\Controllers\Root;

use Illuminate\Http\Request;
use kindergestion\Http\Controllers\Controller;
use kindergestion\MessageAdminClient;
use kindergestion\School;

class MessageAdminClientController extends Controller
{
    public function listaMessage()
    {
        $messages = MessageAdminClient::all();

        return view('root.parts.message.list', compact('messages'));
    }

    public function addMessage()
    {
        $schools = School::all();

        return view('root.parts.message.create', compact('schools'));
    }

    public function storeMessage(Request $request)
    {
        $messageAdminClient = new MessageAdminClient();
        $messageAdminClient->fill($request->all())->save();

        return back();
    }
}
