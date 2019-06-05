<?php

namespace kindergestion\Http\Controllers\School;

use Illuminate\Support\Facades\Mail;
use kindergestion\Http\Requests\School\ComunicationRequest;
use kindergestion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use kindergestion\Comunication;
use kindergestion\Http\Requests\School\ComunicationSalaRequest;
use kindergestion\Room;
use kindergestion\Student;
use kindergestion\Tutor;

class ComunicationController extends Controller
{
    public function index()
    {
        $comunications = Comunication::with(['tutor'])
            ->where('school_id', auth()->user()->school_id)
            ->where('tutor_id','!=',NULL)
            ->orderBy('date', 'DESC')
            ->paginate(10);

        return view('school.message.sent', compact('comunications'));
    }

    public function salaSent()
    {
        $comunications = Comunication::with(['tutor'])
            ->join('rooms','comunications.room_id','=','rooms.id')
            ->where('comunications.school_id', auth()->user()->school_id)
            ->orderBy('date', 'DESC')
            ->paginate(10);

        return view('school.message.sentSala', compact('comunications'));
    }


    public function create()
    {
        $tutors = Tutor::where('school_id', auth()->user()->school_id)
            ->orderBy('name', 'ASC')
            ->get();

        return view('school.message.compose', compact('tutors'));
    }

    public function store(ComunicationRequest $request)
    {
        $tutor_id = $request->tutor_id;

        foreach ($tutor_id as $tutor) {
            $dataTutor = Tutor::where('id', $tutor_id)
                ->first();

            $comunication = new Comunication();
            $comunication->school_id = auth()->user()->school_id;
            $comunication->date = now();
            $comunication->title = $request['subject'];
            $comunication->body = $request['body'];
            $comunication->tutor_id = $tutor;
            $comunication->read = 'NOREAD';
            $comunication->save();

            Mail::send('email.sendToTutor', ['dataTutor' => $dataTutor], function ($msj) use ($dataTutor) {
                $msj->from('no-respond@kindergestion.com');
                $msj->subject('Mensaje de KinderGestión');
                $msj->to($dataTutor->email, $dataTutor->name);
            });
        }

        Session::flash('message', 'El mensaje <b>' . $comunication->title . '</b> fue enviado correctamente');
        return back();
    }


    public function salaCreate()
    {
        $rooms = Room::where('school_id', auth()->user()->school_id)
            ->orderBy('name', 'ASC')
            ->get();

        return view('school.message.composeSala', compact('rooms'));
    }

    public function salaStore(ComunicationSalaRequest $request)
    {
        $room_id = $request->room_id;

        foreach ($room_id as $room) {
            $students = Student::where('room_id',$room_id)
                ->first();

            $dataTutor = Tutor::where('id',$students->tutor_id)
                ->first();

            $comunication = new Comunication();
            $comunication->school_id = auth()->user()->school_id;
            $comunication->date = now();
            $comunication->title = $request['subject'];
            $comunication->body = $request['body'];
            $comunication->room_id = $room;
            $comunication->read = 'NOREAD';
            $comunication->save();

            Mail::send('email.sendToTutor', ['dataTutor' => $dataTutor], function ($msj) use ($dataTutor) {
                $msj->from('no-respond@kindergestion.com');
                $msj->subject('Mensaje de KinderGestión');
                $msj->to($dataTutor->email, $dataTutor->name);
            });
        }

        Session::flash('message', 'El mensaje <b>' . $comunication->title . '</b> fue enviado correctamente');
        return back();
    }

    public function show($id)
    {
        $comunication = Comunication::find($id);

        return view('school.message.show-sent', compact('comunication'));
    }


    public function destroy($id)
    {

        $comunication = Comunication::find($id);

        if ($comunication != null) {

            $comunication->delete();

            Session::flash('message', 'El mensaje <b>' . $comunication->title . '</b> fue eliminado correctamente');
            return redirect('school/correo/enviados');
        }

        Session::flash('message', 'El mensaje NO puede ser eliminado');
        return redirect('school/correo/enviados');
    }
}
