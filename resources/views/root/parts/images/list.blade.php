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
            <a href="{{ route('photo.addPhotoView') }}" type="button"
               class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5">Agregar Nueva Imagen</a>
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Listado de Imagenes</h4>
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($photos as $photo)
                                <tr>
                                    <td><img src="{{ asset('front/images/images/thumbnail/'.$photo->photo) }}"></td>
                                    <td>{{ $photo->photo }}</td>
                                    <td>
                                        <a href="{{ route('photo.destroy', $photo->id) }}"
                                           class="btn btn-icon waves-effect waves-light btn-danger m-b-5"><i
                                                    class="fa fa-remove"></i></a>
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