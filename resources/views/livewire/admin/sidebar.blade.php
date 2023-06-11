<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
       <span>Everton Silva</span>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
        </div>
    </div> <!-- aside-top.// -->

    <nav>
        <ul class="menu-aside">
            <li class="menu-item active">
                <a class="menu-link" href="{{ route('dashboard') }}"> <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('projects.index') }}"> <i class="icon material-icons md-home"></i>
                    <span class="text">Projetos</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('experiences.index') }}"> <i class="icon material-icons md-home"></i>
                    <span class="text">Experiências</span>
                </a>
            </li>


        </ul>
        <br>
        <br>
    </nav>
</aside>
