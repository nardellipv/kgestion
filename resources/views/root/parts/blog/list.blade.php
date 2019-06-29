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
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Listado de Posts</h4>

                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Título</th>
                                <th>Post</th>
                                <th>Estado</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($lists as $list)
                                <tr>
                                    <td>{{ $list->title }}</td>
                                    <td>{!! str_limit($list->body, 75) !!}</td>
                                    <td>{{ $list->status }}</td>
                                    <td>
                                        <a href="{{ route('blog.show', $list->id) }}" class="btn btn-icon waves-effect waves-light btn-info m-b-5"><i
                                                    class="fa fa-keyboard-o"></i></a>
                                        @if($list->status == 'ACTIVE')
                                            <a href="{{ route('blog.desactive', $list->id) }}" class="btn btn-icon waves-effect btn-secondary m-b-5"><i
                                                        class="fa fa-times-rectangle-o"></i></a>
                                        @else
                                            <a href="{{ route('blog.active', $list->id) }}" class="btn btn-icon waves-effect btn-secondary m-b-5"><i
                                                        class="fa fa-heart-o"></i></a>
                                        @endif
                                        <a href="{{ url('blog.destroy', $list->id) }}" class="btn btn-icon waves-effect waves-light btn-danger m-b-5"><i
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