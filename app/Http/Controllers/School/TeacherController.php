<?php

namespace kindergestion\Http\Controllers\School;

use kindergestion\Http\Requests\School\TeacherStoreRequest;
use kindergestion\Http\Requests\School\TeacherUpdateRequest;
use kindergestion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use kindergestion\Room;
use kindergestion\Teacher;
use Image;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with(['room'])
            ->where('school_id', '=', auth()->user()->school_id)
            ->get();

        return view('school.teacher.index', compact('teachers'));
    }

    public function create()
    {
        $rooms = Room::where('school_id', '=', auth()->user()->school_id)
            ->get();

        return view('school.teacher.create', compact('rooms'));
    }

    public function store(TeacherStoreRequest $request)
    {

        $teacher = new Teacher;
        $teacher->name = $request['nombre'];
        $teacher->last_name = $request['apellido'];
        $teacher->phone = $request['telefono'];
        $teacher->address = $request['direccion'];
        $teacher->email = $request['email'];
        $teacher->room_id = $request['room_id'];
        $teacher->observation = $request['observation'];
        $teacher->school_id = auth()->user()->school_id;

        if ($request->file) {

            if ($request->file) {

                $image = $request->file('file');
                $input['file'] = time() . '.' . $image->getClientOriginalExtension();

                $destinationPath = 'images/thumbnail/'. auth()->user()->name;
                $img = Image::make($image->getRealPath());
                $img->resize(250, 250)->save($destinationPath . $input['file']);

                $destinationPath = 'images/' . auth()->user()->name . '-' . auth()->user()->id . '/icons/teachers';
                $image->move($destinationPath, $input['file']);

                $teacher->photo = $input['file'];

            }
        }
        $teacher->save();

        Session::flash('message', 'Profesor <b>' . $teacher->name . ' ' . $teacher->last_name . '</b> creado correctamente');
        return back();
    }

    public function show($id)
    {
        $teacher = Teacher::find($id);

        $rooms = Room::where('school_id', '=', auth()->user()->school_id)
            ->get();

        return view('school.teacher.show', compact('teacher', 'rooms'));
    }

    public function edit($id)
    {
        //
    }

    public function update(TeacherUpdateRequest $request, $id)
    {
        $teacher = Teacher::find($id);

        $teacher->name = $request['nombre'];
        $teacher->last_name = $request['apellido'];
        $teacher->phone = $request['telefono'];
        $teacher->address = $request['direccion'];
        $teacher->email = $request['email'];
        $teacher->room_id = $request['room_id'];
        $teacher->observation = $request['observation'];

        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'images/thumbnail/'. auth()->user()->name;
            $img = Image::make($image->getRealPath());
            $img->resize(250, 250)->save($destinationPath . $input['file']);

            $destinationPath = 'images/' . auth()->user()->name . '-' . auth()->user()->id . '/icons/teachers';
            $image->move($destinationPath, $input['file']);

            $teacher->photo = $input['file'];
        }
        $teacher->update();

        Session::flash('message', 'Perfil editado correctamente');
        return back();
    }

    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        Session::flash('message', 'Profesor <b>' . $teacher->name . ' ' . $teacher->last_name . '</b> eliminado correctamente');
        return back();
    }
}
