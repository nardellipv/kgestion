<?php

namespace kindergestion\Http\Controllers\Tutor;

use kindergestion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Date\Date;
use kindergestion\Tutor;
use kindergestion\Calendar;
use kindergestion\Student;
use kindergestion\School;


class HomeController extends Controller
{
    public function view()
    {
        $nextEvents = Calendar::where('calendars.school_id', '=', Auth::User()->school_id)
            ->where('date_start', '>=', Date::now()->sub('1 day'))
            ->get();

        $tutorId = Tutor::where('email', Auth::user()->email)
            ->first();

        $students = Student::where('tutor_id', $tutorId->id)
            ->get();

        $school = School::where('id', Auth::user()->school_id)
            ->first();

        return view('tutor.home', compact('nextEvents','students', 'school'));
    }
}
