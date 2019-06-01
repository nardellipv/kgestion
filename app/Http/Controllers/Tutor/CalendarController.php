<?php

namespace kindergestion\Http\Controllers\Tutor;

use kindergestion\Http\Controllers\Controller;
use kindergestion\Student;
use kindergestion\Tutor;
use Jenssegers\Date\Date;
use kindergestion\Calendar;


class CalendarController extends Controller
{
    public function __construct()
    {
        Date::setLocale('es');
    }

    public function index()
    {
        $tutorId = Tutor::where('email', auth()->user()->email)
            ->first();

        $students = Student::where('tutor_id', $tutorId->id)
            ->first();

        if ($students != null) {
            $calendars = Calendar::where('school_id', auth()->user()->school_id)
                ->where('room_id', $students->room_id)
                ->get();

            return view('tutor.eventos.index', compact('calendars'));
        }

        return view('tutor.eventos.index');
    }

}
