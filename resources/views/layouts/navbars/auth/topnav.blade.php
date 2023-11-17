<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl
        {{ str_contains(Request::url(), 'virtual-reality') == true ? ' mt-3 mx-3 bg-primary' : '' }}"
    id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">

        {{-- Nav de la pagina en que esta  --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Paginas</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{ $title }}</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">{{ $title }}</h6>
        </nav>


        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">{{-- div del buscador  --}}
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-xl-none ps-3 mx-2 mt-0 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex mt-3 align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0 " id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer text-lg">
                                @if (auth()->user()->unreadNotifications->count() != 0)
                                    <span
                                        class=" badge badge-md badge-circle badge-floating badge-warning border-dark">{{ auth()->user()->unreadNotifications->count() }}</span>
                                @endif
                            </i>
                        </a>
                        {{-- aplicar notificacion de comentarios de las cass  --}}
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 me-sm-n4"
                            aria-labelledby="dropdownMenuButton">
                            {{-- primera notificacion aqui aplicar un forech y determinar los comentarios de las casas --}}
                            <li class="mb-2">
                                <div class="d-flex py-1  justify-content-between align-items-center">
                                    <p class="text-xs text-secondary mb-0">
                                        <i class="fa-light  me-1">
                                            Tienes {{ auth()->user()->unreadNotifications->count() }} notificaciones
                                            nuevas</i>
                                    </p>

                                    <a href=""> <span class="badge bg-gradient-secondary    ">Ver todo</span>
                                    </a>
                                </div>
                            </li>
                            <hr>
                            @foreach (auth()->user()->unreadNotifications as $notification)
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md"
                                        href="{{ route('one_notifications', [$notification->id, $notification->data['casa_id']]) }}">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('./img/team-2.jpg') }}"
                                                    class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1 ">
                                                    <span class="font-weight-bold ">Inmueble
                                                        {{ $notification->data['name_casa'] }}</span>
                                                    de {{ $notification->data['name_user'] }}
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    {{ $notification->data['fecha'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
</nav>
<!-- End Navbar -->
