@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => $casa->name])
    <div class="container">
        <div class="row">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills  nav-fill p-1" role="tablist">
                    <li class="nav-item" onclick="fotos();">
                        <a id="cambiar1" class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab"
                            href="#profile-tabs-icons" role="tab" aria-controls="preview" aria-selected="true">
                            <i class="ni ni-badge text-sm me-2 text-dark"></i> Imagenes
                        </a>
                    </li>
                    <li class="nav-item" onclick="video();">
                        <a id="cambiar1" class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-icons"
                            role="tab" aria-controls="code" aria-selected="false">
                            <i class="ni ni-laptop text-sm me-2"></i> Recorrido 360
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="div1" class="activo">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($casa->media as $media)
                        <div class="carousel-item @if ($media->order_column == 1) active @endif">
                            <div class="page-header min-vh-75 m-3 border-radius-xl"
                                style="background-image: url('{{ $media->getUrl('thumb') }}');">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 my-auto">
                                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Pricing Plans</h4>
                                            <h1 class="text-white fadeIn2 fadeInBottom">Work with the rockets</h1>
                                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an
                                                evolutionarily recent positive-sum game. Status is an old zero-sum game.
                                                Those
                                                attacking
                                                wealth creation are often just seeking status.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid px-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="info-horizontal bg-gradient-primary border-radius-xl p-5">
                                            <div class="icon">
                                                <svg width="25px" height="25px" viewBox="0 0 42 42" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>office</title>
                                                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g id="Rounded-Icons"
                                                            transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                                            fill-rule="nonzero">
                                                            <g id="Icons-with-opacity"
                                                                transform="translate(1716.000000, 291.000000)">
                                                                <g id="office"
                                                                    transform="translate(153.000000, 2.000000)">
                                                                    <path
                                                                        d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                                                                        id="Path" opacity="0.6"></path>
                                                                    <path
                                                                        d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"
                                                                        id="Shape"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="description ps-5">
                                                <h5 class="text-white">Descripción general</h5>
                                                <p class="text-white"> {{ $casa->descripcion }} </p>
                                                <a href="javascript:;" class="text-white icon-move-right">
                                                    Mas informacion
                                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="info-horizontal bg-light border-radius-xl p-5">
                                            <div class="icon">
                                                <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 40"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>ungroup</title>
                                                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g id="Rounded-Icons"
                                                            transform="translate(-2170.000000, -442.000000)" fill="#FFFFFF"
                                                            fill-rule="nonzero">
                                                            <g id="Icons-with-opacity"
                                                                transform="translate(1716.000000, 291.000000)">
                                                                <g id="ungroup"
                                                                    transform="translate(454.000000, 151.000000)">
                                                                    <path class="color-background"
                                                                        d="M38.1818182,10.9090909 L32.7272727,10.9090909 L32.7272727,30.9090909 C32.7272727,31.9127273 31.9127273,32.7272727 30.9090909,32.7272727 L10.9090909,32.7272727 L10.9090909,38.1818182 C10.9090909,39.1854545 11.7236364,40 12.7272727,40 L38.1818182,40 C39.1854545,40 40,39.1854545 40,38.1818182 L40,12.7272727 C40,11.7236364 39.1854545,10.9090909 38.1818182,10.9090909 Z"
                                                                        id="Path"></path>
                                                                    <path class="color-foreground"
                                                                        d="M27.2727273,29.0909091 L1.81818182,29.0909091 C0.812727273,29.0909091 0,28.2781818 0,27.2727273 L0,1.81818182 C0,0.814545455 0.812727273,0 1.81818182,0 L27.2727273,0 C28.2781818,0 29.0909091,0.814545455 29.0909091,1.81818182 L29.0909091,27.2727273 C29.0909091,28.2781818 28.2781818,29.0909091 27.2727273,29.0909091 Z"
                                                                        id="Path"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="description ps-5">
                                                <h5>Brave web browser</h5>
                                                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws
                                                    every
                                                    summer, and that process will continue whatever.</p>
                                                <a href="javascript:;" class="text-primary icon-move-right">
                                                    Mas informacion
                                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="min-vh-75 position-absolute w-100 top-0">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div id="div2" class="oculto"style="display: none ">
            <div class="card card-profile card-plain mt-4 ">
                <div class="card-body text-center bg-white shadow border-radius-lg p-3">

                    <iframe class="w-100 border-radius-md" width="780" height="520"
                        src="https://virtualitour.es/tours/fl89QxQQBQ1U1KIR5uVk" frameborder="0" fullscreen></iframe>

                </div>
            </div>

        </div>
        {{-- comentarios  mejorar --}}
        <section>
            <div class="container my-5 py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="card text-dark ">
                            <div class="card-body p-4 ">
                                <h4 class="mb-0 small lh-sm border-bottom">Comments </h4>
                                <p class="fw-light mb-4 pb-2 small lh-sm ">Latest Comments section by users</p>
                                <form action="{{ route('comment.store', $casa->id) }}" method="post">
                                    @csrf
                                    <div class="d-flex text-body-secondary  ">
                                        <textarea id="comment"name="comment" class="form-control  mb-0 small lh-sm border-bottom" style="resize:none">
                                                   </textarea>
                                    </div>
                                    <div class="d-flex text-body-secondary pt-3 justify-content-end align-content-end">
                                        <input type="submit" class="btn btn-outline-primary btn-sm lh-sm" id="prueba"
                                            value="Confirmar">
                                    </div>
                                </form>
                                {{-- mostrar los comentarios --}}
                                @if (!empty($comments))
                                    @foreach ($comments as $comment)
                                        <div class="d-flex flex-start mt-2">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp"
                                                alt="avatar" width="60" height="60" />
                                            <div>
                                                <h6 class="fw-bold mb-1">{{ $comment->user->username }}</h6>
                                                <div class="d-flex align-items-center mb-3">
                                                    @if ($comment->user->id == auth()->user()->id)
                                                        <p class="mb-0 small lh-sm ">
                                                            {{ $comment->created }}
                                                            <a class="badge bg-primary ">Active</a>
                                                        </p>

                                                        <a href="#!" class="link-muted" data-bs-toggle="modal"
                                                            data-bs-target="#update{{ $comment->id }}"><i
                                                                class="fas fa-pencil-alt text-info ms-2"></i></a>
                                                        <a href="#!" class="link-muted" data-bs-toggle="modal"
                                                            data-bs-target="#delete{{ $comment->id }}"><i
                                                                class="fas fa-trash-alt text-danger ms-2"></i></a>
                                                    @endif

                                                </div>
                                                <p class="mb-0 small lh-sm border-bottom">
                                                    {{ $comment->comment }}
                                                </p>
                                            </div>
                                        </div>


                                        {{-- modal para update de comentarios --}}
                                        <div class="modal fade" id="update{{ $comment->id }}" tabindex="-1"
                                            aria-labelledby="exampleModdcalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('comment.update', $comment) }}" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                Modificar comentario
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <textarea name="comment" class="form-control   border-bottom" cols="40" rows="8">  {{ $comment->comment }}
                                                                    </textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="delete{{ $comment->id }}" tabindex="-1"
                                            aria-labelledby="exampleModdcalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('comment.destroy', $comment) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                Eliminar comentario
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit"
                                                                class="btn btn-danger">Confirmar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="d-flex flex-start mt-2">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp"
                                            alt="avatar" width="60" height="60" />

                                    </div>
                                @endif





                            </div>

                            <hr class="my-0" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('layouts.footers.auth.footer')


    {{-- crear tabla de relaciones con los link para hacer un foreche y que cada vez que se puedan poner 3 imagenes est este --}}
@endsection


@push('js')
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
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
