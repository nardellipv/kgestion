<?php

namespace kindergestion\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use kindergestion\Tutor;

class TutorController extends Controller
{
    public function index()
    {
        $tutors = Tutor::where('school_id', Auth::user()->school_id)
            ->get();

        return view('tutor._list', compact('tutors'));
    }
}
