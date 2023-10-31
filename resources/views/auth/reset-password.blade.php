@extends('layouts.app')


@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('layouts.navbars.guest.navbar')
            </div>
        </div>
    </div>


    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/reset-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-7">Restablecer Contraseña</h1>
                        <p class="text-lead text-white">
                            Recibirás un correo electrónico en máximo 60 segundos.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card mb-md-8">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                                    <i class="ni ni-circle-08 text-white text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">¿No puedes iniciar sesión?</h5>
                                    <p class="text-sm mb-0">Restaurar el acceso a su cuenta</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('reset.perform') }}">
                                @csrf
                                @method('post')
                                <label>Le enviaremos un enlace de recuperación a</label>
                                <input type="email" name="email" class="form-control" placeholder="Your e-mail"
                                    aria-label="Email">
                                @error('email')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                @enderror
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Restablecer</button>
                                </div>
                            </form>
                        </div>
                        <div id="alert">
                            @include('components.alert')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </main>

@endsection
