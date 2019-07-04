@extends('school.layouts.main')
@section('style')
    <link rel="stylesheet" href={{ asset( 'vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}>
    <link rel="stylesheet" href={{ asset( 'vendor/select2/select2.min.css') }}>
@endsection
@section('content')

    @include('layouts.message_errors')
    @include('layouts.message_success')

    <div class="box box-solid box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Aumentar Plan</h3>
        </div>
        <div class="box-body">
            {!! Form::open(['method' => 'POST','route' => ['solicitud'],'style'=>'display:inline']) !!}
            {{ csrf_field() }}
            <div class="form-group">
                <input class="form-control" name="subject" placeholder="Asunto:" value="Aumento de Plan - {{ $school->name }} - {{ $plan }}" readonly>
            </div>
            <div class="form-group">
                    <textarea id="compose-textarea" name="body" class="form-control" style="height: 200px">
                        Guarderia: <b>{{ $school->name }}</b>
                        <br>
                        Plan a aumentar: <b>{{ $plan }}</b>
                        <br>---------------------------------------------------------------------------------<br>
                        <p>NOTA: El envío de la solicitud es un compromiso de compra, usted puede darse de baja cuando lo desee.
                        Una vez envíada la solicitud un representante de KinderGestion se estará comunicando con usted para
                        enviarle el cupón de pago por el mes correspondiente.</p>
                        <p>Los métodos de pagos son a través de <i>MercadoPago, PayU o transferencia Bancaria</i>.</p>
                        <p>En caso de haber elegido el plan <b>Pro</b> nuestro representante se comunicará con usted solicitar una
                        entrevista para el diseño del sitio web de su jardín.</p>
                        <p>Le agradecemos la compra y esperamos que nos siga eligiendo</p>
                    </textarea>
            </div>
        </div>
        <div class="box-footer">
            <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar</button>
            </div>
            <a href="{{url('school/mensajes')}}" class="btn btn-default"><i class="fa fa-times"></i> Canceler</a>
        </div>
        {!! form::close() !!}
    </div>
@endsection
@section('scripts')
    <script src={{ asset( '/vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}></script>
    <script src={{ asset( '/vendor/select2/select2.full.min.js') }}></script>
    <script>
        $(function () {
            //Add text editor
            $("#compose-textarea").wysihtml5();
            $(".select2").select2();
        });
    </script>
@endsection