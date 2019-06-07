<div class="box box-solid box-default">
    <div class="box-header">
        <h3 class="box-title">Accesos Directos</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-default collapsed-box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Padre/Tutor</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body">
                            {!! Form::open(['method' => 'POST','route' => ['tutores.store'],'style'=>'display:inline']) !!} {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control input-lg" type="text" placeholder="Nombre"
                                               name="nombre" value="{{old('nombre')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-lg" type="text" placeholder="Apellido"
                                               name="apellido" value="{{old('apellido')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-lg" type="text" placeholder="Teléfono"
                                               name="telefono" value="{{old('telefono')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-lg" type="text" placeholder="DNI" name="dni"
                                               value="{{old('dni')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-lg" type="email" placeholder="EMail"
                                               name="email" value="{{old('email')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea name="direccion" class="form-control input-lg" rows="3"
                                                  placeholder="Direccion" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="observation" class="form-control input-lg" rows="4"
                                                  placeholder="Observaciones"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-lg" type="password" placeholder="contraseña"
                                               name="password" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn  btn-primary btn-lg">Crear Tutor</button>
                                </div>
                            </div>
                            {{ Form::Close() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-default collapsed-box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Alumno</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body">
                            {!! Form::open(['method' => 'POST','route' => ['estudiantes.store'],'style'=>'display:inline','enctype' => 'multipart/form-data']) !!}
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control input-lg" type="text" placeholder="Nombre"
                                               name="nombre"
                                               value="{{old('nombre')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-lg" type="text" placeholder="Apellido"
                                               name="apellido"
                                               value="{{old('apellido')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-lg" type="text" placeholder="DNI" name="dni"
                                               value="{{old('dni')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Sexo</label>
                                        <div class="radio" required>
                                            <label>
                                                <input type="radio" name="sexo" class="minimal" value="NENE">
                                                Nene
                                            </label>
                                            <label>
                                                <input type="radio" name="sexo" class="minimal" value="NENA">
                                                Nena
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" name="fecha" class="form-control input-lg"
                                               value="{{old('fecha')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="room_id" class="form-control input-lg" required>
                                            <option value="">Asignar una sala</option>

                                            @foreach ($rooms as $room)
                                                <option value="{{$room->id}}">{{$room->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="tutor_id" class="form-control input-lg" required>
                                            <option value="">Asignar un tutor</option>

                                            @foreach ($tutors as $tutor)
                                                <option value="{{$tutor->id}}">{{$tutor->name}} {{$tutor->last_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                        <textarea name="observation" class="form-control input-lg" rows="5"
                                  placeholder="Observaciones">{{old('observation')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="file" id="exampleInputFile"
                                               class="form-control input-lg">
                                    </div>

                                </div>

                                <div class="form-group col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn  btn-primary btn-lg">Crear Alumno</button>
                                </div>
                            </div>
                            {{ Form::Close() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-default collapsed-box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Docente</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        {!! Form::open(['method' => 'POST','route' => ['profesores.store'],'style'=>'display:inline','enctype' => 'multipart/form-data' ]) !!}
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control input-lg" type="text" placeholder="Nombre" name="nombre"
                                           value="{{old('nombre')}}" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-lg" type="text" placeholder="Apellido"
                                           name="apellido"
                                           value="{{old('apellido')}}" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-lg" type="text" placeholder="Teléfono"
                                           name="telefono"
                                           value="{{old('telefono')}}" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-lg" type="email" placeholder="EMail" name="email"
                                           value="{{old('email')}}" required>
                                </div>
                                <div class="form-group">
                                    <select name="room_id" class="form-control input-lg">
                                        <option value="">Asignar una sala</option>

                                        @foreach ($rooms as $room)
                                            <option value="{{$room->id}}">{{$room->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                        <textarea name="direccion" class="form-control input-lg" rows="2" placeholder="Direccion"
                                  required>{{old('direccion')}}</textarea>
                                </div>
                                <div class="form-group">
                        <textarea name="observation" class="form-control input-lg" rows="5"
                                  placeholder="Observaciones">{{old('observation')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="file" id="exampleInputFile" class="form-control input-lg">
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-md-offset-4">
                                <button type="submit" class="btn  btn-primary btn-lg">Crear Doncete</button>
                            </div>
                        </div>
                        {{ Form::Close() }}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-default collapsed-box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Crear Sala</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        {!! Form::open(['method' => 'POST','route' => ['salas.store'],'style'=>'display:inline']) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="fecha" class="col-sm-2 control-label">Nombre Sala</label>
                            <div class="col-sm-12">
                                <input type="text" name="nombre" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="teacher_id" class="col-sm-2 control-label">Profesor a cargo</label>
                            <div class="col-sm-12">
                                <select name="teacher_id" class="form-control">
                                    <option value="">Elija un profesor a cargo</option>
                                    <optgroup label="Profesores">
                                        @foreach ($teachers as $teacher)
                                            <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Crear Sala</button>
                            </div>
                        </div>
                        {{ Form::Close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>