<?php

namespace kindergestion\Http\Controllers\School;

use kindergestion\Http\Requests\School\ProfileSchoolRequest;
use kindergestion\Http\Requests\School\ProfileUserRequest;
use kindergestion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use kindergestion\School;
use kindergestion\User;

class SchoolController extends Controller
{

    public function updateSchool(ProfileSchoolRequest $request, $id)
    {

        $school = School::find($id);
        $school->name = $request['nombre'];
        $school->address = $request['direccion'];
        $school->city = $request['ciudad'];
        $school->cp = $request['cp'];
        $school->phone = $request['telefono'];
        $school->url = $request['url'];
        $school->email = $request['email'];

        $school->save();

        Session::flash('message', 'Perfil editado correctamente');
        return back();
    }

    public function updateUser(ProfileUserRequest $request, $id)
    {
        $user = User::find($id);

        $user->name = $request['nombre'];
        $user->email = $request['email'];
        if ($request['password']) {
            $user->password = bcrypt($request['password']);
        }

        $user->save();

        Session::flash('message', 'Perfil editado correctamente');
        return back();
    }

    public function show($id)
    {

        $school = School::find($id);

        $this->authorize('pass', $school);

        $user = User::find(auth()->user()->id);

        return view('school.profile.edit', compact('school', 'user'));
    }

}
