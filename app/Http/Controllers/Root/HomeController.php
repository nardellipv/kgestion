<?php

namespace kindergestion\Http\Controllers\Root;

use Illuminate\Http\Request;
use kindergestion\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('root.dasboard');
    }
}
