<?php

namespace kindergestion\Http\Controllers\School;

use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use kindergestion\Http\Controllers\Controller;
use kindergestion\School;

class UpgradeController extends Controller
{
    public function upgrade($plan)
    {
        $school = School::where('id', Auth::user()->school_id)
            ->first();

        return view('school.upgrade.contactUpgrade', compact('school','plan'));
    }

    public function solicitud(Request $request)
    {

        Mail::send('email.upgradePlan', $request->all(), function ($msj) use ($request) {
            $msj->from('no-respond@kindergestion.com');
            $msj->subject('Mensaje de KinderGestión');
            $msj->to('comercial@kidergestion.com');
        });

        Session::flash('message', 'Recibimos su solicitud correctamente, un asesor se pondrá en contacto con usted. Muchas gracias');
        return back();
    }
}
