<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>K</b>G</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Kinder</b>Gestión</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if(Request::is('school/home'))
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">{{ $message }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Tiene {{ $message }} mail sin leer</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    @foreach($messageUnRead as $message)
                                        <li>
                                            <a href="#">
                                                <h4>
                                                    {{ str_limit($message->tutor->name,15) }}
                                                    <small>
                                                        <i class="fa fa-clock-o"></i> {{ Date::parse($message->date)->diffForHumans() }}
                                                    </small>
                                                </h4>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="footer"><a href="{{url('school/mensajes')}}">Ver todos los mensajes</a></li>
                        </ul>
                    </li>

                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">{{ $messageAdminClient }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Tiene {{ $messageAdminClient }} mensajes del sistema</li>
                            <li>
                                <ul class="menu">
                                    @foreach($messageAdminClients as $messageAdminClient)
                                        <li>
                                            <a href="#">
                                                <p>{{ $messageAdminClient->title }}</p>
                                                <small>{!! $messageAdminClient->body !!}</small>
                                                <small>
                                                    <i class="fa fa-clock-o"></i> {{ Date::parse($messageAdminClient->created_at)->diffForHumans() }}
                                                </small>

                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
            @endif
            <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{Auth::user()->name}} <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ asset('dist/img/logo-school.png') }}" class="img-circle" alt="imagen-perfil">
                            <p>
                                {{Auth::user()->name}}-{{Auth::user()->user_type}}
                                <small>Miembro desde {{Auth::user()->created_at->format('d/m/y')}}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            @if(auth()->user()->user_type == 'ADMIN')
                                <div class="pull-left">
                                    <a href="{{URL('school/perfil', auth()->user()->school_id)}}"
                                       class="btn btn-default btn-flat">Perfil</a>
                                </div>
                            @endif
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Salir
                                </a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>