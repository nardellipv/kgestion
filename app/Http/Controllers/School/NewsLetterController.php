<?php

namespace kindergestion\Http\Controllers\School;

use kindergestion\Http\Controllers\Controller;
use kindergestion\Http\Requests\NewsLetterRequest;
use kindergestion\NewsLetter;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class NewsLetterController extends Controller
{
    public function store(NewsLetterRequest $newsLetterRequest)
    {
        $newsLetter = new newsLetter;
        $newsLetter->email = $newsLetterRequest->email;
        $newsLetter->save();

        Session::flash('message', 'El mail ' . $newsLetter->email . ' fue agregado correctamente');
        return Redirect::to('/login#horizontalTab3');
    }
}
