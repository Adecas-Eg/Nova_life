@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@push('js')
    <script type="module" src="{{ asset('/assets/js/script.js') }}"></script>
@endpush

<style>
    #map {
        height: 100%;
    }


    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>




@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Casas'])

    @foreach ($latitud as $lat)
        <input type="hidden" name="lat[]" value="{{ $lat }}">
    @endforeach
    @foreach ($longitud as $lon)
        <input type="hidden" name="lng[]" value="{{ $lon }}">
    @endforeach
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-lg-10 text-center mx-auto mt-5 pt-3">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <form class="form">
                                <div class="input-group">
                                    <input type="text" name="buscar" class="form-control border border-secondary"
                                        placeholder="Ubicacion" value="{{ $buscar }}">

                                    <button type="button" class="form-control border border-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Transsacion
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-check  ">
                                                    <input class="form-check-input input-group-outline" type="checkbox"
                                                        id="flexCheckDefault" name="transaccion" value="apartamento">
                                                    <i class="fa fa-building" aria-hidden="true"></i>
                                                    <label class="form-check-label text-white" for="flexCheckDefault">
                                                        Apartamento
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-check  ">
                                                    <input class="form-check-input input-group-outline" type="checkbox"
                                                        id="flexCheckDefault" name="transaccion" value="apartaestudio">
                                                    <i class="fa fa-university" aria-hidden="true"></i>
                                                    <label class="form-check-label text-white" for="flexCheckDefault">
                                                        Apartaestudio
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-check  ">
                                                    <input class="form-check-input input-group-outline" type="checkbox"
                                                        id="flexCheckDefault" name="transaccion" value="casa">
                                                    <i class="fa fa-home" aria-hidden="true"></i>
                                                    <label class="form-check-label text-white" for="flexCheckDefault">
                                                        Casa
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-check  ">
                                                    <input class="form-check-input input-group-outline" type="checkbox"
                                                        id="flexCheckDefault" name="transaccion" value="cabaña">
                                                    <i class="fa fa-money" aria-hidden="true"></i>
                                                    <label class="form-check-label text-white" for="flexCheckDefault">
                                                        Cabaña
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-check  ">
                                                    <input class="form-check-input input-group-outline" type="checkbox"
                                                        id="flexCheckDefault" name="transaccion" value="finca">
                                                    <i class="fa fa-money" aria-hidden="true"></i>
                                                    <label class="form-check-label text-white" for="flexCheckDefault">
                                                        Finca
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-check  ">
                                                    <input class="form-check-input input-group-outline" type="checkbox"
                                                        id="flexCheckDefault" name="transaccion" value="habitacion">
                                                    <i class="fa fa-money" aria-hidden="true"></i>
                                                    <label class="form-check-label text-white" for="flexCheckDefault">
                                                        Habitacion
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-check  ">
                                                    <input class="form-check-input input-group-outline" type="checkbox"
                                                        id="flexCheckDefault" name="transaccion" value="bodega">
                                                    <i class="fa fa-money" aria-hidden="true"></i>
                                                    <label class="form-check-label text-white" for="flexCheckDefault">
                                                        Bodega
                                                    </label>
                                                </div>
                                            </div>

                                        </div>


                                    </ul>
                                    <button type="button" class="form-control border border-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Inmueble
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <div class="form-check  ">
                                            <input class="form-check-input input-group-outline" type="checkbox"
                                                value="" id="flexCheckDefault">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <label class="form-check-label text-white" for="flexCheckDefault">
                                                Venta
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input input-group-outline" type="checkbox"
                                                value="" id="flexCheckDefault">
                                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                            <label class="form-check-label text-white" for="flexCheckDefault">
                                                Arriendo
                                            </label>
                                        </div>

                                    </ul>
                                    <button class="input-group-text bg-info text-body"><i class="fas fa-search text-white"
                                            aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach ($casas as $casa)
                        {{-- poner en pagina principal --}}
                        {{-- <div class="col-md-6 mt-4">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <a href="javascript:;">
                                            <div class="position-relative">
                                                <div class="blur-shadow-image">
                                                    <img class="w-100 rounded-3 shadow-lg"
                                                        src="{{ $casa->getMedia('casas')->first()->getUrl('thumb') }}" style="height: 100%;">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 ps-0 my-auto">
                                        <div class="card-body text-left">
                                            <div class="p-md-0 pt-3">
                                                <h5 class="font-weight-bolder mb-0">{{$csas}}</h5>
                                                <p class="text-uppercase text-sm font-weight-bold mb-2">Landscape Architect
                                                </p>
                                            </div>
                                            <p class="mb-4">Success is not final, failure is not fatal: it is the courage
                                                to
                                                continue that counts...</p>
                                            <button type="button"
                                                class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                                                <i class="fab fa-facebook" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                                                <i class="fab fa-github" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-5 mt-4">
                            <div class="card card-profile mt-md-0 mt-5">
                                <a href="{{ route('casa.show', $casa) }}">
                                    <div class="p-3">
                                        <img class="w-100 border-radius-md"
                                            src="{{ $casa->getMedia('casas')->first()->getUrl('thumb') }}"
                                            alt="Image placeholder" class="card-img-top">
                                    </div>
                                </a>
                                <div class="card-body blur justify-content-center text-center mx-4 mb-4 border-radius-md">
                                    <h4 class="mb-0  font-weight-bolder text-dark text-gradient text-uppercase">
                                        {{ $casa->name }}</h4>
                                    <p>{{ $casa->ubicacion }}</p>
                                    <div class="row justify-content-center text-center">
                                        <div class="col-12 mx-auto">
                                            <p
                                                class="mb-0 text-xs font-weight-bolder text-warning text-gradient text-uppercase">
                                                area desde <b>{{ $casa->area }}m<sup>2</sup></b></p>
                                            <small>{{ $casa->ciudad }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col">
                <div class=" ">

                    <div id="map"></div>
                    <input class="form-control" type="text" id="pac-input" placeholder="ingresa una direcion">

                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
    </div>

    <input class="form-control" type="text" id="autoComplete" placeholder="ingresa una uri">

    <div class="container">



    </div>


    <div class="container-fluid py-4">
        <div class="row">



            {{-- acomodar foreach --}}
        </div>
        <div class="row">


        </div>

        {{-- poner la api del mapa aqui  --}}
        <div class="pagination justify-content-center mt-4 ">
            {{ $casas->links() }}
        </div>
    </div>
    @include('layouts.footers.auth.footer')
    </div>
@endsection
