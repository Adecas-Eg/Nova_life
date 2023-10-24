<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">


    {{-- DIV DE LOGO MAS NOMBRE  SIDENAD LATERAL --}}
    <div class="sidenav-header move-on-hover">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('casa.home') }}">
            {{-- //IMAGEN Y LOGO --}}
            <img src="{{ asset('img/logo1.png') }}" class="navbar-brand-img" alt="main_logo">
            <span class="ms-1 font-weight-bold"> NOVA LIFE </span>
        </a>
    </div>


    <hr class="horizontal dark mt-0">
    {{-- DIV DE DENTRO DE LAS PAGINAS --}}
    <div class=" collapse navbar-collapse  w-auto " id="sidenav-collapse-main">

        <ul class="navbar-nav">
            {{-- DASHBOARD DE ADMINISTRADOR --}}
            @can('dashboard')
                <li class="nav-item move-on-hover">
                    <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
            @endcan
            {{-- @can('admin.casas') --}}
            <li class="nav-item move-on-hover">
                <a class="nav-link {{ Route::currentRouteName() == 'admin/casas' ? 'active' : '' }}"
                    href="{{ route('admin.casas') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-home text-info text-gradient text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Inmuebles</span>
                </a>
            </li>
            {{-- @endcan --}}
            @can('users.index')
                <li class="nav-item move-on-hover">
                    <a class="nav-link {{ Route::currentRouteName() == 'users' ? 'active' : '' }}"
                        href="{{ route('users.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Administrar Usario</span>
                    </a>
                </li>
            @endcan

            {{-- Titulo de modulo  modificar
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4">
                    <i class="fab fa-laravel" style="color: #f4645f;"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Inmuebles</h6>
            </li> --}}

            {{-- PROFILE LINK ya esta abajp --}}
            {{-- <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li> --}}


            {{-- MANAGEMENT LINK
            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'user-management') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'user-management']) }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Management</span>
                </a>
            </li> --}}


            {{-- Inmuebles --}}

            <li class="nav-item  mt-3 d-flex align-items-center">
                <div class="ps-4">
                    <i class="fa fa-home text-info text-gradient text-sm opacity-10"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Inmuebles</h6>
            </li>

            @can('casa.index')
                <li class="nav-item move-on-hover">

                    {{-- sabe si el link esta activo o no realiza una peticion al url y si esta activo lo muestra cambar a la otra pagimnna --}}
                    <a class="nav-link {{ str_contains(request()->url(), 'casa') == true ? 'active' : '' }}"
                        href="{{ route('casa.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-shop text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Inmuebles</span>
                    </a>
                </li>
            @endcan



            @can('casa.create')
                <li class="nav-item  move-on-hover">

                    {{-- sabe si el link esta activo o no realiza una peticion al url y si esta activo lo muestra cambar a la otra pagimnna --}}
                    <a class="nav-link {{ str_contains(request()->url(), 'casa/create') == true ? 'active' : '' }}"
                        href="{{ route('casa.create') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-house-medical text-warning text-gradient text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Publicar Inmuebles</span>
                    </a>
                </li>
            @endcan


            {{-- TABLES LINK --}}
            @can('casa.administer')
                <li class="nav-item move-on-hover">
                    <a class="nav-link {{ str_contains(request()->url(), 'administer') == true ? 'active' : '' }}"
                        href="{{ route('casa.administer') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-building-user text-dark text-gradient text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Administrar Inmuebles</span>
                    </a>
                </li>
            @endcan


            {{-- Añadir cosas --}}
            {{-- bolling LINK
            <li class="nav-item">
                <a class="nav-link {{  str_contains(request()->url(), 'billing') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'billing']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>


            VIRTUAL REALITY LINK
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'virtual-reality' ? 'active' : '' }}" href="{{ route('virtual-reality') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Virtual Reality</span>
                </a>
            </li>

            RTL LINK
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'rtl' ? 'active' : '' }}" href="{{ route('rtl') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">RTL</span>
                </a>
            </li> --}}

            {{-- ACOOUNNT LINK --}}
            <li class="nav-item mt-3 ">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Perfil</h6>
            </li>

            {{-- PROFILE LINK --}}
            @can('profile')
                <li class="nav-item move-on-hover">
                    <a class="nav-link {{ Route::currentRouteName() == 'profile-static' ? 'active' : '' }}"
                        href="{{ route('profile') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
            @endcan

            <li class="nav-item move-on-hover">

                <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="nav-link ">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-right-from-bracket text-gradient text-warning text-lg "></i>
                        </div>
                        <span class="nav-link-text ms-1">Cerrar sección
                        </span>
                    </a>
                </form>
            </li>
            {{--
            <li class="nav-item">
                <a class="nav-link " href="{{ route('sign-in-static') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('sign-up-static') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul> --}}
    </div>
</aside>
