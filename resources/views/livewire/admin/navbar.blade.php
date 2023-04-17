<header class="main-header navbar">
    <div class="col-brand"></div>
    <div class="col-nav">
        <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="md-28 material-icons md-menu"></i> </button>
        <ul class="nav">
            <li class="dropdown nav-item">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"> {{ auth()->user()->name}} </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href=" {{route('profile.create')}} ">Perfil</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <button
                        class="dropdown-item text-danger"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair
                    </button>
                </div>
            </li>
        </ul>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</header>
