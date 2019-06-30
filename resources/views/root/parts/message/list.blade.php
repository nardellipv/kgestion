@extends('root.layouts.main')

@section('style')
    <link href="{{ asset('styleRoot/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('styleRoot/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <a href="{{ route('add.message') }}" type="button"
               class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5">Nuevo Mensaje</a>
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Listado de Mensajes</h4>
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Título</th>
                                <th>Texto</th>
                                <th>Escuela</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($messages as $message)
                                <tr>
                                    <td>{{ $message->title }}</td>
                                    <td>{!! $message->body  !!}</td>
                                    <td>{{ $message->school_id }}</td>
                                    <td>
                                        <button class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i class="fa fa-keyboard-o"></i> </button>
                                        <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button>
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
@endsection

@section('script')
    <script src="{{ asset('styleRoot/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('styleRoot/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });

    </script>
@endsection