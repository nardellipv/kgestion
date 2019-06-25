@extends('layouts.mainSchool')

@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Listado <span class="table-project-n">de</span> Padres/Tutores</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                       data-show-columns="false" data-show-pagination-switch="false"
                                       data-show-refresh="false" data-key-events="true" data-show-toggle="false"
                                       data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                                       data-show-export="true" data-click-to-select="false" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th data-editable="true">Nombre y Apellido</th>
                                        <th data-editable="true">Dirección</th>
                                        <th data-editable="true">Ciudad</th>
                                        <th data-editable="true">Teléfono</th>
                                        <th data-editable="true">Email</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tutors as $tutor)
                                        <tr>
                                            <td>{{ $tutor->name }} {{ $tutor->last_name }}</td>
                                            <td>{{ $tutor->address }}</td>
                                            <td>{{ $tutor->city }}</td>
                                            <td>{{ $tutor->phone }}</td>
                                            <td>{{ $tutor->email }}</td>
                                            <td>
                                                <i class="fa fa-check"></i>
                                                <a href=""><i class="fa fa-eye"></i></a>
                                                <i class="fa fa-trash"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection