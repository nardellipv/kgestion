<?php

namespace kindergestion\Http\Controllers\Tutor;

use kindergestion\Http\Controllers\Controller;
use kindergestion\Circular;

class CircularController extends Controller
{
    public function index()
    {
        $circularesActive = Circular::where('school_id', auth()->user()->school_id)
            ->where('active','YES')
            -> get();

        return view('tutor.circular.index', compact('circularesActive'));
    }
}
