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
                            <p class="lead pe-md-5 me-md-5 text-white opacity-8">Aqui podras encontrar la casa de tus sueños</p>
                            <div class="buttons">
                               <a class="btn bg-gradient-primary mt-4" href="{{route('login')}}">Empieza con nosotrosw</a>
                                <a href="{{ route('sobre') }}" class="btn text-white shadow-none mt-4">Quienes somos</button>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10 mx-auto bg-gradient-dark border-radius-lg">
                            <div class="row py-5">
                                <div class="col-xl-4 col-md-6 px-5 position-relative">
                                    <img class="img border-radius-md max-width-300 w-100 position-relative z-index-2 mt-n7"
                                        src="https://images.unsplash.com/photo-1521668576204-57ae3afee860?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80"
                                        loading="lazy" alt="card image">
                                </div>
                                <div class="col-xl-4 col-md-5 z-index-2 position-relative px-md-3 px-5 my-md-auto mt-4">
                                    <i class="material-icons text-white text-5xl">format_quote</i>
                                    <p class="text-lg text-white">
                                        Decisions: If you can’t decide, the answer is no.
                                        If two equally difficult paths, choose the one more
                                        painful in the short term (pain avoidance is creating
                                        an illusion of equality). Choose the path that leaves
                                        you more equanimous in the long term.
                                    </p>
                                    <p class="text-white font-weight-bold text-sm">Michael - <span
                                            class="text-xs font-weight-normal">Writter</span></p>
                                    <hr class="vertical start-100 ms-n5 d-xl-block d-none">
                                </div>
                                <div class="col-1"></div>
                                <div class="col-xl-2 col-12 px-xl-0 px-5 my-xl-auto">
                                    <h3 class="text-white mt-xl-0 mt-5">1,679,700 +</h3>
                                    <p class="text-sm text-white opacity-8">Developers and Companies around the world using
                                        our products.</p>
                                    <a href="javascript:;" class="text-white icon-move-right text-sm">See all products
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
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
                    {{-- <div class="row text-center justify-content-center">
                        <div class="col-lg-6">
                            <span class="badge rounded-pill badge-primary mb-2">Co-working</span>
                            <h2>Explore our places in London </h2>
                            <p>
                                If you can’t decide, the answer is no. If two equally difficult paths,
                                choose the one more painful in the short term (pain avoidance
                                is creating an illusion of equality).
                            </p>
                        </div>
                    </div> --}}
                    <div class="row mt-5">
                        <div class="col-lg-4 mb-lg-0 mb-4">

                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-weight-normal">Campus 6</h5>
                                    <p>Website visitors today demand a frictionless user expericence. Applies to mobile
                                        applications too.</p>
                                    <button class="btn btn-outline-dark btn-sm mb-0" type="button" name="button">Find
                                        more</button>
                                </div>
                            </div>


                            <div class="card mt-5">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="https://images.unsplash.com/photo-1589884629108-3193400c7cc9?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                            loading="lazy">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://images.unsplash.com/photo-1589884629108-3193400c7cc9?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-weight-normal">Virtual Office</h5>
                                    <p>If you’re more passionate about founding a business than the business itself, you can
                                        fall into.</p>
                                    <button class="btn btn-outline-dark btn-sm mb-0" type="button" name="button">More
                                        info</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 mb-lg-0 mb-4">

                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="https://images.unsplash.com/photo-1498677231914-50deb6ba4217?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                            loading="lazy">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://images.unsplash.com/photo-1498677231914-50deb6ba4217?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-weight-normal">Cozy Spots</h5>
                                    <p>If you’re more passionate about founding a business than the business itself
                                        technology.</p>
                                    <button class="btn btn-outline-dark btn-sm mb-0" type="button" name="button">More
                                        info</button>
                                </div>
                            </div>


                            <div class="card mt-5">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                            loading="lazy">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-weight-normal">Co-working Spaces</h5>
                                    <p>Smart money is just dumb money that’s been through a crash. Business than the
                                        business itself.</p>
                                    <button class="btn btn-outline-dark btn-sm mb-0" type="button" name="button">Find
                                        more</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="https://images.unsplash.com/photo-1587578932405-7c740a762f7f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                            loading="lazy">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://images.unsplash.com/photo-1587578932405-7c740a762f7f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-weight-normal">Home Office</h5>
                                    <p>Website visitors today demand a frictionless user expericence — especially when using
                                        search.</p>
                                    <button class="btn btn-outline-dark btn-sm mb-0" type="button" name="button">Find
                                        more</button>
                                </div>
                            </div>


                            <div class="card mt-5">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="https://images.unsplash.com/photo-1461988625982-7e46a099bf4f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                            loading="lazy">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://images.unsplash.com/photo-1461988625982-7e46a099bf4f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-weight-normal">Private Space</h5>
                                    <p>Technology is not only the thing that moves the human race forward, but it’s the only
                                        thing that has.</p>
                                    <button class="btn btn-outline-dark btn-sm mb-0" type="button" name="button">More
                                        info</button>
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
