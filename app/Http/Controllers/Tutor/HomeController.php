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

        $tutorId = Tutor::where('email', Auth::user()->email)
            ->first();

        $nextEvents = Calendar::with(['Room'])
            ->join('room__tutors', 'room__tutors.room_id', 'calendars.room_id')
            ->where('calendars.school_id', $tutorId->school_id)
            ->where('calendars.date_start', '>=', Date::now()->sub('1 day'))
            ->get();


        $students = Student::with(['room', 'school'])
            ->where('tutor_id', $tutorId->id)
            ->get();

        $school = School::where('id', Auth::user()->school_id)
            ->first();

        return view('tutor.home', compact('nextEvents', 'students', 'school'));
    }
}
