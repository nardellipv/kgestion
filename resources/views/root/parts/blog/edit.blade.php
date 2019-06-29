@extends('root.layouts.main')

@section('style')
    <link href="{{ asset('styleRoot/assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')
    <div class="p-20">
            {!! Form::model($post, ['method' => 'PATCH','route' => ['blog.update', $post->id],'style'=>'form-horizontal']) !!}

            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-2 col-form-label">Título</label>
                <div class="col-10">
                    <input type="text" class="form-control" placeholder="Título" value="{{ $post->title }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Subir imagen</label>
                <div class="col-10">
                    <input type="file" class="dropify" data-max-file-size="1M"/>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Texto</label>
                <div class="col-10">
                    <textarea id="elm1" name="area">{{ $post->body }}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-xs btn-purple waves-effect waves-light">Guardar Post</button>
        {!! Form::Close() !!}
    </div>
@endsection


@section('script')

    <script src="{{ asset('styleRoot/assets/plugins/fileuploads/js/dropify.min.js') }}"></script>
    <script src="{{ asset('styleRoot/assets/plugins/tinymce/tinymce.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            if ($("#elm1").length > 0) {
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]
                });
            }
        });
    </script>

    <script type="text/javascript">
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong appended.'
            },
            error: {
                'fileSize': 'The file size is too big (1M max).'
            }
        });
    </script>
@endsection