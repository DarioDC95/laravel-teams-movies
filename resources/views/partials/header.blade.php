<header class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-2 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">MoviesPress</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" Placeholder="Search">
    <div class="navbar nav">
        <div class="nav-item text-nowrap ms-2">
            <a class="nav-link text-light" href="" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</header>
