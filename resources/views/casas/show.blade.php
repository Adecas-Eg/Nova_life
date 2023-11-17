@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => $casa->name])
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header d-flex pb-0 p-3">
                    <h6 class="my-auto "> Inmueble de <b class="text-gradient text-warning">{{ $casa->user->username }} </b>
                    </h6>
                    <div class="nav-wrapper position-relative ms-auto w-50">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam1""
                                    role="tab" aria-controls="cam1" aria-selected="true">
                                    Imagenes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3"
                                    role="tab" aria-controls="cam3" aria-selected="false">
                                    Recorrido 3d
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="card-body p-3 mt-2">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade position-relative border-radius-lg  active show" id="cam1" role="tabpanel"
                            aria-labelledby="cam1">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($casa->media as $media)
                                        <div class="carousel-item @if ($media->order_column == 1) active @endif">
                                            <div class="page-header min-vh-75 m-3 border-radius-xl"
                                                style="background-image: url('{{ $media->getUrl() }}');">
                                            </div>

                                        </div>
                                    @endforeach

                                </div>
                                <div class="min-vh-75 position-absolute w-100 top-0">
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon position-absolute bottom-50"
                                            aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon position-absolute bottom-50"
                                            aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative height-400 border-radius-lg " id="cam3"
                            role="tabpanel" aria-labelledby="cam2">
                            <div class="position-absolute d-flex top-0 w-100 justify-content-center">
                                <iframe class="border border-2" width="100%" height="400"
                                    src="https://virtualitour.es/tours/4" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            {{-- row barra datos prevos --}}
            <div class="row border text-center align-content-center  border-4 border-radius-xl p-3 mt-4">

                <div class="col-md-4  border-end-md move-on-hover">

                    <i class="text-dark  fa-solid fa-chart-area fa-xl  mx-1 "></i>
                    <p class=" text-sm  ">
                        Area Contruida <b>{{ $casa->area }}m<sup>2</sup></b></p>
                </div>

                <div class="col-md-2  border-end move-on-hover">
                    <b>{{ $casa->pisos }} </b><i class=" fa-solid fa-bed  fa-xl mx-1"></i>
                    <p class=" text-sm  ">
                        Habitaciones</p>
                </div>
                <div class="col-md-3 move-on-hover">
                    <p class=" text-sm  mt-3 ">
                        Baños <b> {{ $casa->baños }} </b>
                        <i class="fa-solid fa-bath  text-dark fa-xl mx-1"></i>
                    </p>
                </div>


                <div class="col-md-3 border-start move-on-hover">
                    <div class="mt-3">
                        <i class="fa-solid fa-chart-simple fa-fade text-dark fa-xl mx-1 "></i>
                        <small class=" text-sm  mt-3">
                            Estrato <b> {{ $casa->estrato }} </b>
                        </small>
                    </div>
                </div>
            </div>

            <div class="accordion-1 mt-4">
                <div class="">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="accordion" id="accordionRental">
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-bottom font-weight-bold collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            Descripcion General
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                        <div class="accordion-body text-sm ">
                                            {{ $casa->descripcion }} Ubicada en <b class="text-gradient text-warning">
                                                {{ $casa->direccion }}</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-bottom font-weight-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Datos principales del inmuebnle
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm ">
                                            <div class="row">
                                                <div class="col-3"> <span class="text-gradient text-warning"><b>Nombre
                                                            del
                                                            Inmueble </b><br></span>
                                                    {{ $casa->name }}
                                                </div>
                                                <div class="col-3">
                                                    <span class="text-gradient text-warning"><b>Ciudad </b><br></span>
                                                    {{ $casa->ciudad }}
                                                </div>
                                                <div class="col-3">
                                                    <span class="text-gradient text-warning"><b>Departamento
                                                        </b><br></span>
                                                    {{ $casa->departamento }}
                                                </div>
                                                <div class="col-3">
                                                    <span class="text-gradient text-warning"><b>Precio </b><br></span>
                                                    ${{ $casa->precio }}
                                                </div>
                                            </div>
                                            <div class="row ">

                                                <div class="col mt-4">
                                                    <span class="text-gradient text-warning"><b>Antiguedad </b><br></span>
                                                    Mas de {{ $casa->antiguedad }} AÑOS
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-bottom font-weight-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Caracteristicas del inmubele
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">
                                            {{ $casa->caracteristicas }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- comentarios  mejorar --}}
        @include('components.comentario',['comments' =>$comments,'casa'=>$casa])

        </div>
        @include('layouts.footers.auth.footer')


        {{-- crear tabla de relaciones con los link para hacer un foreche y que cada vez que se puedan poner 3 imagenes est este --}}
    @endsection


    @push('js')
        <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/sweet.js') }}"></script>

        <script>
            let foto = document.getElementById('div1');
            let recorrido = document.getElementById('div2');

            function fotos() {
                if (foto.className == "oculto") {
                    foto.className = "activo";
                    foto.style.display = "block";
                    recorrido.className = "oculto";
                    recorrido.style.display = "none";
                }

            }

            function video() {
                if (recorrido.className == "oculto") {
                    recorrido.className = "activo";
                    recorrido.style.display = "block";
                    foto.className = "oculto";
                    foto.style.display = "none";
                }

            }
        </script>
    @endpush
