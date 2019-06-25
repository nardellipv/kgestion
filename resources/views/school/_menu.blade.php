<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#"><img src="img/message/1.jpg" alt="" />
            </a>
            <h3>Andrar Son</h3>
            <p>Developer</p>
            <strong>AP+</strong>
        </div>
        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                <li class="nav-item">
                    <a href="{{ url('/school/dashboard') }}" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Inicio</span> </a>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-leanpub"></i> <span class="mini-dn">Docentes</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="" class="dropdown-item">Listado Docentes</a>
                        <a href="view-mail.html" class="dropdown-item">Agregar Nuevo</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Padre/Tutor</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{ route('list.tutor') }}" class="dropdown-item">Listado Padre/Tutor</a>
                        <a href="view-mail.html" class="dropdown-item">Agregar Nuevo</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Estudiantes</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="inbox.html" class="dropdown-item">Listado Estudiantes</a>
                        <a href="view-mail.html" class="dropdown-item">Agregar Nuevo</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Mailbox</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="inbox.html" class="dropdown-item">Inbox</a>
                        <a href="view-mail.html" class="dropdown-item">View Mail</a>
                        <a href="compose-mail.html" class="dropdown-item">Compose Mail</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>