@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Administrar Casas'])

    <div class="container-fluid py-4 ">
        <div class="row justify-content-center ">
            <div class="col-md-4 mb-4">
                <div class="card card-pricing">
                    <div class="card-header bg-gradient-dark text-center pt-4 pb-5 position-relative">
                        <div class="z-index-1 position-relative">
                            <h5 class="text-white">Nova Life</h5>
                            <h5 class="text-white">FREE</h5>
                            <h1 class="text-white mt-2 mb-0">
                                <small>$</small>0
                            </h1>
                            <h6 class="text-white">Mensual</h6>
                            <span class="badge bg-gradient-success">Activo</span>

                        </div>
                    </div>
                    <div class="position-relative mt-n5" style="height: 50px;">
                        <div class="position-absolute w-100">
                            <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none"
                                shape-rendering="auto">
                                <defs>
                                    <path id="card-wave"
                                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                </defs>
                                <g class="moving-waves">
                                    <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(125,255,51,0.30"></use>
                                    <use xlink:href="#card-wave" x="48" y="3" fill="rgba(125,255,51,0.35)"></use>
                                    <use xlink:href="#card-wave" x="48" y="5" fill="rgba(125,255,51,0.25)"></use>
                                    <use xlink:href="#card-wave" x="48" y="8" fill="rgba(125,255,51,0.20)"></use>
                                    <use xlink:href="#card-wave" x="48" y="13" fill="rgba(125,255,51,0.15)"></use>
                                    <use xlink:href="#card-wave" x="48" y="16" fill="rgba(125,255,51,0.99)"></use>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <ul class="list-unstyled max-width-200 mx-auto">
                            <li>
                                <div class="d-flex pb-3">
                                    <div>
                                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-sm">Limite de 3 inmubles</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex pb-3">
                                    <div>
                                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-sm">Limite de comentarios </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex pb-3">
                                    <div>
                                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-sm">Visibilidad Estándar </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                            Try Premium
                            <i class="fas fa-arrow-right ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-pricing">
                    <div class="card-header bg-gradient-dark text-center pt-4 pb-5 position-relative">
                        <div class="z-index-1 position-relative">
                            <h5 class="text-white">Nova Life</h5>
                            <h5 class="text-white">Medium</h5>
                            <h1 class="text-white mt-2 mb-0">
                                <small>$</small>20.000
                            </h1>
                            <h6 class="text-white">Mensual</h6>
                            <span class="badge bg-gradient-dark text-gradient text-dark">Inactivo</span>

                        </div>
                    </div>
                    <div class="position-relative mt-n5" style="height: 50px;">
                        <div class="position-absolute w-100">
                            <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none"
                                shape-rendering="auto">
                                <defs>
                                    <path id="card-wave"
                                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                </defs>
                                <g class="moving-waves">
                                    <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(51,181,255,0.30"></use>
                                    <use xlink:href="#card-wave" x="48" y="3" fill="rgba(51,181,255,0.35)"></use>
                                    <use xlink:href="#card-wave" x="48" y="5" fill="rgba(51,181,255,0.25)"></use>
                                    <use xlink:href="#card-wave" x="48" y="8" fill="rgba(51,181,255,0.20)"></use>
                                    <use xlink:href="#card-wave" x="48" y="13" fill="rgba(51,181,255,0.15)"></use>
                                    <use xlink:href="#card-wave" x="48" y="16" fill="rgba(51,181,255,0.99)"></use>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <ul class="list-unstyled max-width-200 mx-auto">
                            <li>
                                <div class="d-flex pb-3">
                                    <div>
                                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-sm">Limite de 15 inmubles</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex pb-3">
                                    <div>
                                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-sm">Sin Limite de comentarios </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex pb-3">
                                    <div>
                                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-sm">Visibilidad Media </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                            Try Premium
                            <i class="fas fa-arrow-right ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-pricing">
                    <div class="card-header bg-gradient-dark text-center pt-4 pb-5 position-relative">
                        <div class="z-index-1 position-relative">
                            <h5 class="text-white">Nova Life</h5>
                            <h5 class="text-white">Premium</h5>
                            <h1 class="text-white mt-2 mb-0">
                                <small>$</small>50.0000
                            </h1>
                            <h6 class="text-white">Mesual</h6>
                            <span class="badge bg-gradient-dark text-gradient text-dark">Inactivo</span>

                        </div>
                    </div>
                    <div class="position-relative mt-n5" style="height: 50px;">
                        <div class="position-absolute w-100">
                            <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40"
                                preserveAspectRatio="none" shape-rendering="auto">
                                <defs>
                                    <path id="card-wave"
                                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                </defs>
                                <g class="moving-waves">
                                    <use xlink:href="#card-wave" x="48" y="-2" fill="rgba(255,70,51,0.30"></use>
                                    <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,70,51,0.35)"></use>
                                    <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,70,51,0.25)"></use>
                                    <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,70,51,0.20)"></use>
                                    <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,70,51,0.15)"></use>
                                    <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,70,51,0.99)"></use>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <ul class="list-unstyled max-width-200 mx-auto">
                            <li>
                                <div class="d-flex pb-3">
                                    <div>
                                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-sm">Sin Limite de inmubles</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex pb-3">
                                    <div>
                                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-sm">Sin Limite de comentarios </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex pb-3">
                                    <div>
                                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-md">Visibilidad Alta </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                            Try Premium
                            <i class="fas fa-arrow-right ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
