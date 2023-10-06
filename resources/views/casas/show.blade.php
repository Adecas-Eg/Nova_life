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
                    <div class="carousel-item">
                        <div class="page-header min-vh-75 m-3 border-radius-xl"
                            style="background-image: url('{{ $casa->getMedia('casas')->first()->getUrl('thumb') }}');">

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Pricing Plans</h4>
                                        <h1 class="text-white fadeIn2 fadeInBottom">Work with the rockets</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an
                                            evolutionarily recent positive-sum game. Status is an old zero-sum game. Those
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
                                                    <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <g id="Icons-with-opacity"
                                                            transform="translate(1716.000000, 291.000000)">
                                                            <g id="office" transform="translate(153.000000, 2.000000)">
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
                                                    <g id="Rounded-Icons" transform="translate(-2170.000000, -442.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <g id="Icons-with-opacity"
                                                            transform="translate(1716.000000, 291.000000)">
                                                            <g id="ungroup" transform="translate(454.000000, 151.000000)">
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

                    <div class="carousel-item">
                        <div class="page-header min-vh-75 m-3 border-radius-xl"
                            style="background-image: url('{{ $casa->getMedia('casas')->last()->getUrl('thumb') }}');">

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Pricing Plans</h4>
                                        <h1 class="text-white fadeIn2 fadeInBottom">Work with the rockets</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an
                                            evolutionarily recent positive-sum game. Status is an old zero-sum game. Those
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
                                                    <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <g id="Icons-with-opacity"
                                                            transform="translate(1716.000000, 291.000000)">
                                                            <g id="office" transform="translate(153.000000, 2.000000)">
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
                                                    <g id="Rounded-Icons" transform="translate(-2170.000000, -442.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
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
                    <div class="carousel-item">
                        <div class="page-header min-vh-75 m-3 border-radius-xl"
                            style="background-image: url('https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Our Team</h4>
                                        <h1 class="text-white fadeIn2 fadeInBottom">Work with the best</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Free people make free
                                            choices.
                                            Free choices mean you get unequal outcomes. You can have freedom, or you can
                                            have
                                            equal
                                            outcomes. You can’t have both.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid px-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="info-horizontal bg-light border-radius-xl p-5">
                                        <div class="icon">
                                            <svg class="text-info" width="25px" height="25px" viewBox="0 0 40 40"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>spaceship</title>
                                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Rounded-Icons" transform="translate(-1720.000000, -592.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <g id="Icons-with-opacity"
                                                            transform="translate(1716.000000, 291.000000)">
                                                            <g id="spaceship" transform="translate(4.000000, 301.000000)">
                                                                <path class="color-foreground"
                                                                    d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"
                                                                    id="Shape"></path>
                                                                <path class="color-foreground"
                                                                    d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"
                                                                    id="Path"></path>
                                                                <path class="color-background"
                                                                    d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                    id="color-2"></path>
                                                                <path class="color-background"
                                                                    d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                    id="color-3"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="description ps-5">
                                            <h5>Descripción general</h5>
                                            <p> {{ $casa->descripcion }} </p>
                                            <a href="javascript:;" class="text-dark icon-move-right">
                                                Learn more
                                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info-horizontal bg-light border-radius-xl p-5">
                                        <div class="icon">
                                            <svg class="text-info" width="25px" height="25px" viewBox="0 0 40 40"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>spaceship</title>
                                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Rounded-Icons" transform="translate(-1720.000000, -592.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <g id="Icons-with-opacity"
                                                            transform="translate(1716.000000, 291.000000)">
                                                            <g id="spaceship" transform="translate(4.000000, 301.000000)">
                                                                <path class="color-foreground"
                                                                    d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"
                                                                    id="Shape"></path>
                                                                <path class="color-foreground"
                                                                    d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"
                                                                    id="Path"></path>
                                                                <path class="color-background"
                                                                    d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                    id="color-2"></path>
                                                                <path class="color-background"
                                                                    d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                    id="color-3"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="description ps-5">
                                            <h5>Brave web browser</h5>
                                            <p> {{ $casa->Descripcion }} </p>
                                            <a href="javascript:;" class="text-dark icon-move-right">
                                                Learn more
                                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="page-header min-vh-75 m-3 border-radius-xl"
                            style="background-image: url('https://images.unsplash.com/photo-1552793494-111afe03d0ca?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Office Places</h4>
                                        <h1 class="text-white fadeIn2 fadeInBottom">Work from home</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">You’re spending time to
                                            save
                                            money when you should be spending money to save time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid px-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="info-horizontal bg-light border-radius-xl p-5">
                                        <div class="icon">
                                            <svg class="text-danger" width="25px" height="25px" viewBox="0 0 40 44"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>document</title>
                                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <g id="Icons-with-opacity"
                                                            transform="translate(1716.000000, 291.000000)">
                                                            <g id="document"
                                                                transform="translate(154.000000, 300.000000)">
                                                                <path class="color-foreground"
                                                                    d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                    id="Path" opacity="0.603585379"></path>
                                                                <path class="color-background"
                                                                    d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"
                                                                    id="Shape"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="description ps-5">
                                            <h5>Descripción general</h5>
                                            <p>{{$casa->descripcion}}</p>
                                            <a href="javascript:;" class="text-dark icon-move-right">
                                                Mas informacion
                                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info-horizontal bg-gradient-danger border-radius-xl p-5">
                                        <div class="icon">
                                            <svg class="mt-1" width="25px" height="25px" viewBox="0 0 40 40"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>settings</title>
                                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Rounded-Icons" transform="translate(-2020.000000, -442.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <g id="Icons-with-opacity"
                                                            transform="translate(1716.000000, 291.000000)">
                                                            <g id="settings"
                                                                transform="translate(304.000000, 151.000000)">
                                                                <polygon id="Path" opacity="0.596981957"
                                                                    points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                                </polygon>
                                                                <path
                                                                    d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                    id="Path" opacity="0.596981957"></path>
                                                                <path
                                                                    d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"
                                                                    id="Path"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="description ps-5">
                                            <h5 class="text-white">Brave web browser</h5>
                                            <p class="text-white">The Arctic Ocean freezes every winter and much of the
                                                sea-ice
                                                then thaws every summer, and that process will continue whatever.</p>
                                            <a href="javascript:;" class="text-white icon-move-right">
                                                Mas informacion
                                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    F
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