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
                                style="background-image: url('{{ $media->getUrl() }}');">
                            </div>

                        </div>
                    @endforeach

                </div>
                <div class="min-vh-75 position-absolute w-100 top-0">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
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

        {{-- row barra datos prevos --}}
        <div class="row border text-center align-content-center  border-4 border-radius-xl p-3 mt-4">

            <div class="col-md-4  border-end-md ">

                <i class="  text-dark  fa-solid fa-chart-area fa-xl  mx-1 "></i>
                <p class=" text-sm  ">
                    Area Contruida <b>{{ $casa->area }}m<sup>2</sup></b></p>
            </div>

            <div class="col-md-2  border-end">
                <b>{{ $casa->pisos }} </b><i class="  text-dark fa-solid fa-bed  fa-xl mx-1"></i>
                <p class=" text-sm  ">
                    Habitaciones</p>
            </div>
            <div class="col-md-3">
                <p class=" text-sm  mt-3">
                    Baños <b> {{ $casa->baños }} </b>
                    <i class="fa-solid fa-bath  text-dark fa-xl mx-1"></i>
                </p>
            </div>


            <div class="col-md-3 border-start">
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
                                    <button class="accordion-button border-bottom font-weight-bold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        How do I order?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionRental" style="">
                                    <div class="accordion-body text-sm opacity-8">
                                        We’re not always in the position that we want to be at. We’re constantly
                                        growing. We’re constantly making mistakes. We’re constantly trying to express
                                        ourselves and actualize our dreams. If you have the opportunity to play this
                                        game
                                        of life you need to appreciate every moment. A lot of people don’t appreciate
                                        the moment until it’s passed.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border-bottom font-weight-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        How can i make the payment?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        It really matters and then like it really doesn’t matter. What matters is the
                                        people who are sparked by it. And the people who are like offended by it, it
                                        doesn’t matter. Because it's about motivating the doers. Because I’m here to
                                        follow my dreams and inspire other people to follow their dreams, too.
                                        <br>
                                        We’re not always in the position that we want to be at. We’re constantly
                                        growing. We’re constantly making mistakes. We’re constantly trying to express
                                        ourselves and actualize our dreams. If you have the opportunity to play this
                                        game of life you need to appreciate every moment. A lot of people don’t
                                        appreciate the moment until it’s passed.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button border-bottom font-weight-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How much time does it take to receive the order?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        The time is now for it to be okay to be great. People in this world shun people
                                        for being great. For being a bright color. For standing out. But the time is now
                                        to be okay to be the greatest you. Would you believe in what you believe in, if
                                        you were the only one who believed it?
                                        If everything I did failed - which it doesn't, it actually succeeds - just the
                                        fact that I'm willing to fail is an inspiration. People are so scared to lose
                                        that they don't even try. Like, one thing people can't say is that I'm not
                                        trying, and I'm not trying my hardest, and I'm not trying to do the best way I
                                        know how.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button border-bottom font-weight-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Can I resell the products?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        I always felt like I could do anything. That’s the main thing people are
                                        controlled by! Thoughts- their perception of themselves! They're slowed down by
                                        their perception of themselves. If you're taught you can’t do anything, you
                                        won’t do anything. I was taught I could do everything.
                                        <br><br>
                                        If everything I did failed - which it doesn't, it actually succeeds - just the
                                        fact that I'm willing to fail is an inspiration. People are so scared to lose
                                        that they don't even try. Like, one thing people can't say is that I'm not
                                        trying, and I'm not trying my hardest, and I'm not trying to do the best way I
                                        know how.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingFifth">
                                    <button class="accordion-button border-bottom font-weight-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false"
                                        aria-controls="collapseFifth">
                                        Where do I find the shipping details?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseFifth" class="accordion-collapse collapse"
                                    aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        There’s nothing I really wanted to do in life that I wasn’t able to get good at.
                                        That’s my skill. I’m not really specifically talented at anything except for the
                                        ability to learn. That’s what I do. That’s what I’m here for. Don’t be afraid to
                                        be wrong because you can’t learn anything from a compliment.
                                        I always felt like I could do anything. That’s the main thing people are
                                        controlled by! Thoughts- their perception of themselves! They're slowed down by
                                        their perception of themselves. If you're taught you can’t do anything, you
                                        won’t do anything. I was taught I could do everything.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <textarea name="comment" class="form-control  mb-0 small lh-sm border-bottom" style="resize:none">
                                                   </textarea>
                                    </div>
                                    <div class="d-flex text-body-secondary pt-3 justify-content-end align-content-end">
                                        <input type="submit" class="btn  bg-gradient-dark btn-sm lh-sm" id="prueba"
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
                                                    <form action="{{ route('comment.update', $comment) }}"
                                                        method="post">
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
