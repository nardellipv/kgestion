<?php

namespace kindergestion\Http\Controllers\School;

use kindergestion\Http\Requests\School\StudentRequest;
use kindergestion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use kindergestion\Room_Tutor;
use kindergestion\Student;
use kindergestion\Tutor;
use kindergestion\Room;
use Image;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::with(['room', 'tutor'])
            ->where('school_id', auth()->user()->school_id)
            ->get();

        return view('school.student.index', compact('students'));
    }

    public function create()
    {
        $rooms = Room::where('school_id', auth()->user()->school_id)
            ->get();

        $tutors = Tutor::where('school_id', auth()->user()->school_id)
            ->get();

        return view('school.student.create', compact('rooms', 'tutors', 'rooms'));
    }

    public function store(StudentRequest $request)
    {

        $roomTutor = new Room_Tutor;
        $roomTutor->room_id = $request['room_id'];
        $roomTutor->tutor_id = $request['tutor_id'];
        $roomTutor->save();

        $student = new Student;
        $student->name = $request['nombre'];
        $student->last_name = $request['apellido'];
        $student->dni = $request['dni'];
        $student->sex = $request['sexo'];
        $student->birth_date = $request['fecha'];
        $student->room_id = $request['room_id'];
        $student->tutor_id = $request['tutor_id'];
        $student->observation = $request['observation'];
        $student->school_id = auth()->user()->school_id;

        if ($request->file) {

            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'images/thumbnail/'. auth()->user()->name;
            $img = Image::make($image->getRealPath());
            $img->resize(250, 250)->save($destinationPath . $input['file']);

            $destinationPath = 'images/' . auth()->user()->name . '-' . auth()->user()->id . '/icons/students';
            $image->move($destinationPath, $input['file']);

            $student->photo = $input['file'];

        }

        $student->save();

        Session::flash('message', 'Alumno <b>' . $student->name . ' ' . $student->last_name . '</b> creado correctamente');
        return back();
    }

    public function show($id)
    {
        $student = Student::find($id);

        $rooms = Room::where('school_id', '=', auth()->user()->school_id)
            ->get();

        $tutors = Tutor::where('school_id', '=', auth()->user()->school_id)
            ->get();

        return view('school.student.show', compact('student', 'rooms', 'tutors'));

    }

    public function edit($id)
    {
        $students = Student::find($id)
            ->get();

        return view('school.student.show', compact('students'));
    }

    public function update(StudentRequest $request, $id)
    {
        $student = Student::find($id);

        $student->name = $request['nombre'];
        $student->last_name = $request['apellido'];
        $student->dni = $request['dni'];
        $student->sex = $request['sexo'];
        $student->birth_date = $request['fecha'];
        $student->room_id = $request['room_id'];
        $student->tutor_id = $request['tutor_id'];
        $student->observation = $request['observation'];

        if ($request->file) {

            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'images/thumbnail/'. auth()->user()->name;
            $img = Image::make($image->getRealPath());
            $img->resize(250, 250)->save($destinationPath . $input['file']);

            $destinationPath = 'images/' . auth()->user()->name . '-' . auth()->user()->id . '/icons/students';
            $image->move($destinationPath, $input['file']);

            $student->photo = $input['file'];

        }

        $student->update();

        Session::flash('message', 'Perfil editado correctamente');
        return back();
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        Session::flash('message', 'Alumno <b>' . $student->name . ' ' . $student->last_name . '</b> eliminado correctamente');
        return back();
    }
}
