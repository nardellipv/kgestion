@extends('school.layouts.main')

@section('style')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style>
        #PricingTab {
            /*background-image: url('http://techprocircle.com/wp-content/uploads/2016/08/pricing_bg.jpg');*/
            /*background-size: 100% 100%;*/
            background-attachment: fixed;
            padding: 10px 0;
        }
        #PricingTab table{
            max-width:800px;
            margin: 0 auto;
            box-shadow: 1px 1px 149px 0px rgb(24, 25, 25);
        }

        .tabco1 {
            background: #fff;
            width: 40%;
            padding: 10px !important;
        }
        th.tabco1 {
            background: #fff;
            padding: 32px 10px !important;
            font-size: 18px;
            text-transform: uppercase;
            color: #000;
        }
        .tabco2 {
            background: #009688;
            text-align: center;
            color: #fff;
        }

        th.tabco2 {
            background: #00C853;
            padding: 20px 5px !important;
            font-size: 18px;
            text-transform: uppercase;
        }
        .tabco3 {
            background: #03A9F4;
            text-align: center;
            color: #fff;
        }
        th.tabco3 {
            background: #039BE5;

            padding: 20px 10px !important;
            font-size: 18px;
            text-transform: uppercase;
        }
        .tabco4 {
            background: #EF5350;
            text-align: center;
            color: #fff;
        }
        th.tabco4 {
            background: #E53935;

            padding: 20px 10px !important;
            font-size: 18px;
            text-transform: uppercase;
        }
        .rightSign {
            color: #1ab921;
            background: #fff;
            border-radius: 45px;
            padding: 5px;
            border: 2px solid;
            box-shadow: 0px 0px 11px -5px #000;
        }
        .crossSign {
            color: #de2315;
            background: #fff;
            border-radius: 45px;
            padding: 5px 7px;
            border: 2px solid;
            box-shadow: 0px 0px 11px -5px #000;
        }
    </style>
@endsection

@section('content')
    <div id="PricingTab">
        <div class="container">
            <div class="row">
                <table class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th class="tabco1 ">Caracteristicas</th>
                        <th class="tabco2" > Basic
                            $1750 / Mes</th>
                        <th class="tabco3">Pro
                            $2965 / Mes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="tabco1" >Cantidad Alumnos</td>
                        <td class="tabco2" >Sin limite</td>
                        <td class="tabco3">Sin Limite</i></td>
                    </tr>
                    <tr>
                        <td class="tabco1" >Cantidad Educadores</td>
                        <td class="tabco2" >Sin Limite</td>
                        <td class="tabco3" >Sin Limite</td>
                    </tr>
                    <tr>
                        <td class="tabco1" >Cantidad de mensajes</td>
                        <td class="tabco2" >Sin Limite</td>
                        <td class="tabco3" >Sin Limite</td>
                    </tr>
                    <tr>
                        <td class="tabco1" >Cantidad Circulares</td>
                        <td class="tabco2" >Sin Limite</td>
                        <td class="tabco3" >Sin Limite</td>
                    </tr>
                    <tr>
                        <td class="tabco1" >Soporte Vía Email</td>
                        <td class="tabco2" ><i class="fa fa-check rightSign" aria-hidden="true"></i></td>
                        <td class="tabco3" ><i class="fa fa-check rightSign" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td class="tabco1" >Soporte Personalizado</td>
                        <td class="tabco2" ><i class="fa fa-times crossSign" aria-hidden="true"></i></td>
                        <td class="tabco3" ><i class="fa fa-check rightSign" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td class="tabco1" >URL Personalizada</td>
                        <td class="tabco2" ><i class="fa fa-times crossSign" aria-hidden="true"></i></td>
                        <td class="tabco3" ><i class="fa fa-check rightSign" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td class="tabco1" >Sitio Web del Jardín + Plataforma KinderGestion</td>
                        <td class="tabco2" ><i class="fa fa-times crossSign" aria-hidden="true"></i></td>
                        <td class="tabco3" ><i class="fa fa-check rightSign" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td class="tabco1" ></td>
                        <td class="tabco2" ><a href="{{ route('upgrade', 'Basic') }}" type="button" class="btn btn-block btn-warning">Aumentar Plan</a></td>
                        <td class="tabco3" ><a href="{{ route('upgrade', 'Pro') }}" type="button" class="btn btn-block btn-warning">Aumentar Plan</a></td>
                    </tr>
                    </tbody>
                </table>
            </div><!--row-->
        </div><!--container-->
    </div><!--PricingTab-->
@endsection