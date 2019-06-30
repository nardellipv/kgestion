<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('root.home') }}" class="waves-effect"><i class="mdi mdi-airplay"></i> <span> Dashboard </span>
                    </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-color-text"></i> <span> Blog</span>
                        <i class="mdi mdi-chevron-right"></i></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('list') }}">Lista Posts</a></li>
                        <li><a href="{{ route('blog.create') }}">Crear Nuevo Post</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-image"></i>
                        <span> Imagenes</span> <i class="mdi mdi-chevron-right"></i></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('photo.list') }}">Lista Imagenes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('list.message') }}" class="waves-effect" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i
                                class="mdi mdi-message-text"></i> <span> Mensajes Jardines </span> </a>
                </li>
                <li>
                    <a class="mdi mdi-exit-to-app" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        <span> Salir </span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>