@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.navbar')
    <main class="main-content  mt-0">


        {{-- informacion de arriba principal --}}
        <header>
            <div class="page-header min-vh-75"
                style="background-image: url('https://images.unsplash.com/photo-1520769945061-0a448c463865?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80');"
                loading="lazy">
                <span class="mask bg-gradient-dark opacity-5"></span>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-lg-6 col-md-7 d-flex justify-content-center text-md-start text-center flex-column mt-sm-0 mt-7">
                            <h1 class="text-white">Bienvenidos a nova life </h1>
                            <p class="lead pe-md-5 me-md-5 text-white opacity-8">Aqui podras encontrar la casa de tus sueños
                            </p>
                            <div class="buttons">
                                <a class="btn bg-gradient-primary mt-4" href="{{ route('login') }}">Empieza con
                                    nosotrosw</a>
                                <a href="{{ route('sobre') }}" class="btn text-white shadow-none mt-4">Saber mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

            {{-- <section class="py-md-7">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-md-4 ms-md-auto me-md-4">
                            <div class="text-start">
                                <div
                                    class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                                    <i class="material-icons opacity-10">payment</i>
                                </div>
                                <h5 class="mt-3">Modular Components</h5>
                                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer,
                                    and that process will continue whatever.</p>
                            </div>
                            <div class="primary text-start border-radius-lg mt-6">
                                <div
                                    class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                                    <i class="material-icons opacity-10">insights</i>
                                </div>
                                <h5 class="mt-3">Great Features</h5>
                                <p>People are so scared to lose that they don't even try. Like, one thing people can't say
                                    is that I'm not trying, and I'm not trying my hardest.</p>
                            </div>
                        </div>
                        <div class="col-md-4 me-md-auto ms-md-4">
                            <div class="primary text-start border-radius-lg">
                                <div
                                    class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                                    <i class="material-icons opacity-10">access_alarms</i>
                                </div>
                                <h5 class="mt-3">Awesome Support</h5>
                                <p>The time is now for it to be okay to be great. People in this world shun people for being
                                    great. For being a bright color. What else could rust?</p>
                            </div>
                            <div class="primary text-start border-radius-lg mt-6">
                                <div
                                    class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                                    <i class="material-icons opacity-10">sentiment_satisfied</i>
                                </div>
                                <h5 class="mt-3">Modern Interface</h5>
                                <p>If everything I did failed - which it doesn't, it actually succeeds - just the fact that
                                    I'm willing to fail is an inspiration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}


            <section class="py-4 position-relative">
                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col-10 mx-auto bg-gradient-dark border-radius-lg">
                            <div class="row py-5">
                                <div class="col-xl-4 col-md-6 px-5 position-relative">
                                    <img class="img border-radius-md max-width-300 w-100 position-relative z-index-2 mt-n7"
                                        src="https://images.unsplash.com/photo-1521668576204-57ae3afee860?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80"
                                        loading="lazy" alt="card image">
                                </div>
                                <div class="col-xl-4 col-md-5 z-index-2 position-relative px-md-3 px-5 text-center mt-4">
                                    <i class="material-icons text-white text-5xl">Nova Life</i>
                                    <p class="text-lg text-white ">
                                        Bienvenidos a mi hogar, donde los sueños se encuentran con la realidad y cada rincón
                                        cuenta
                                        una historia de inspiración! Esta no es solo una casa; es un santuario de
                                        posibilidades, un
                                        refugio donde el confort se fusiona con la elegancia. Cada detalle ha sido
                                        cuidadosamente
                                        seleccionado para crear un ambiente acogedor y estimulante.
                                    </p>
                                    <p class="text-white font-weight-bold text-sm">Nova life</p>

                                </div>
                                <div class="col-1"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{-- <section class="py-sm-7 py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h3 class="mt-2">Read More About Us</h3>
                            <p>Pain is what we go through as we become older. We get insulted by others, lose trust for
                                those others. We get back stabbed by friends. It becomes harder for us to give others a
                                hand.</p>
                            <a href="javascript:;" class="text-primary text-sm icon-move-right">More about us
                                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0 ms-auto">
                            <div class="p-3 info-horizontal d-flex align-items-center">
                                <div
                                    class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl">
                                    <i class="material-icons opacity-10">mediation</i>
                                </div>
                                <div class="description ps-3">
                                    <p class="mb-0">It becomes harder for us to give others a hand. <br> We get our heart
                                        broken by people we love.</p>
                                </div>
                            </div>
                            <div class="p-3 info-horizontal d-flex align-items-center">
                                <div
                                    class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl">
                                    <i class="material-icons opacity-10">settings_overscan</i>
                                </div>
                                <div class="description ps-3">
                                    <p class="mb-0">As we live, our hearts turn colder. <br>Cause pain is what we go
                                        through as we become older.</p>
                                </div>
                            </div>
                            <div class="p-3 info-horizontal d-flex align-items-center">
                                <div
                                    class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl">
                                    <i class="material-icons opacity-10">token</i>
                                </div>
                                <div class="description ps-3">
                                    <p class="mb-0">When we lose family over time. <br> What else could rust the heart
                                        more over time? Blackgold.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <section class="features-3 py-4">
                <div class="container">
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-6">
                            <span class="badge rounded-pill badge-primary mb-2">Trabajemos justo</span>
                            <h2>Explora con nosotros las mejores ofertas </h2>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4 mb-lg-0 mb-4">

                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 move-on-hover">
                                    <a class="d-block blur-shadow-image">
                                        <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-weight-normal">Oportunidades Únicas</h5>
                                    <p>Descubre propiedades exclusivas y oportunidades de inversión que capturan la esencia
                                        del lujo y la comodidad.
                                    </p>
                                    <a class="btn btn-outline-dark btn-sm mb-0" href="{{ route('casa.index') }}"
                                        name="button">Saber mas</a>
                                </div>
                            </div>




                        </div>
                        <div class="col-lg-4 mb-lg-0 mb-4">

                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 move-on-hover">
                                    <a class="d-block blur-shadow-image">
                                        <img src="https://images.unsplash.com/photo-1498677231914-50deb6ba4217?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://images.unsplash.com/photo-1498677231914-50deb6ba4217?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-weight-normal">Tipos</h5>
                                    <p> Desde residencias contemporáneas hasta encantadores hogares
                                        históricos, cada propiedad es una puerta abierta a un estilo de vida excepcional.</p>
                                    <a class="btn btn-outline-dark btn-sm mb-0" href="{{ route('casa.index') }}"
                                        name="button">Saber mas</a>
                                </div>
                            </div>




                        </div>
                        <div class="col-lg-4">

                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 move-on-hover">
                                    <a class="d-block blur-shadow-image">
                                        <img src="https://images.unsplash.com/photo-1587578932405-7c740a762f7f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://images.unsplash.com/photo-1587578932405-7c740a762f7f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-weight-normal">Desde la comodidad de tu casa</h5>
                                    <p>
                                    "Descubre Tu Hogar Ideal con Recorridos 360: Explora desde Casa"
                                    Explora propiedades exclusivas, cocinas de ensueño y espacios exteriores perfectos con recorridos virtuales 360.</p>
                                    <a class="btn btn-outline-dark btn-sm mb-0" href="{{ route('casa.index') }}"
                                        name="button">Saber mas</a>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </section>



        </div>


    </main>
    @include('layouts.footers.auth.footer')
@endsection
@push('js')
    <script src="{{ asset('/assets/js/plugins/count.js') }}"></script>
    <script>
        if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state2')) {
            const countUp = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state3')) {
            const countUp = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state4')) {
            const countUp = new CountUp('state4', document.getElementById("state4").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
    </script>
@endpush
