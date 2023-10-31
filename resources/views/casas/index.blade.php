@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@push('js')
    <script type="module" src="{{ asset('/assets/js/script.js') }}"></script>
@endpush

<style>
    #map {
        height: 100%;

    }
</style>




@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Casas'])


    <script>
        window.latitud = @php echo json_encode($casas) @endphp;
    </script>


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-8">
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
                                    <button class="input-group-text bg-gradient-dark text-body"><i
                                            class="fas fa-search text-white" aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach ($casas as $casa)
                        <div class="col-md-5 mt-3">
                            <div class="card card-profile  mt-5 ">
                                <a href="{{ route('casa.show', $casa) }}">
                                    <div class="p-3">
                                        <img class="w-100 border-radius-lg img move-on-hover"
                                            src="{{ $casa->getMedia('casas')->first()->getUrl('thumb') }}"
                                            alt="Image placeholder" class="card-img-top" height="240px">
                                    </div>
                                </a>
                                <div class="card-body blur justify-content-center text-center mx-4 mb-4 border-radius-md">
                                    <h4 class="mb-0  font-weigh-bolder text-dark text-gradient text-uppercase">
                                        {{ $casa->name }}</h4>
                                    <p>{{ $casa->ubicacion }}</p>
                                    <div class="row justify-content-center text-center">
                                        <div class="col-12 mx-auto">
                                            <p class="mb-0 text-xs font-weight-bolder text-warning text-gradient ">
                                                Area <b>{{ $casa->area }}m<sup>2</sup></b></p>
                                            <small>{{ $casa->ciudad }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination pagination-dark mt-4 justify-content-center">
                    {{ $casas->links() }}
                </div>
            </div>
            <div class="col">
                <div id="map" class="justify-content-center card card-plain card-blog"></div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')

    </div>
@endsection
