@extends('layouts.app')

@section('content')
    {{-- llama al nav var de invitado --}}
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('layouts.navbars.guest.navbar')
            </div>
        </div>
    </div>
    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-50 pt-7 pb-9 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-cover.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Nova life!!!</h1>
                        <p class="text-lead text-white">Aqui podras encontrar esa la casa de tus sueños!!!</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card mt-5">
                        <div class="card-header pb-0 text-start">
                            <h3 class="font-weight-bolder">Bienvenido de nuevo</h3>
                            <p class="mb-0">Ingresa tus datos para iniciar session</p>
                            <div class="text-center mt-2">
                                <a href="/login-google"
                                    class="btn  justify-content-center align-content-center btn-lg bg-gradient-dark  btn-icon-only rounded-circle">
                                    <span class="btn-inner--icon"><i class="fab fa-google"></i></span>
                                </a>
                            </div>
                            <div class="text-center"> O </div>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('login.perform') }}" class="text-start">
                                @csrf
                                <label>Email</label>
                                <div class="mb-3">
                                    <input type="email" name="email" value="matiose12@gmail.com" class="form-control"
                                        placeholder="Email" aria-label="Email">
                                </div>
                                @error('email')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                @enderror
                                <label>Contraseña</label>
                                <div class="mb-3">
                                    <input type="password" name="password" value="secret" class="form-control"
                                        placeholder="Password" aria-label="Password">
                                </div>
                                @error('password')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                @enderror
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                    <label class="form-check-label" for="rememberMe">Recordarme</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Iniciar</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-1 text-sm mx-auto">
                                ¿Olvidaste tu contraseña? Restablecer su contraseña
                                <a href="{{ route('reset-password') }}"
                                    class="text-warning text-gradient font-weight-bold">Aqui</a>
                            </p>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">
                                ¿No tienes una cuenta?
                                <a href="{{route('register')}}"
                                    class="text-warning text-gradient font-weight-bold">Registrate </a>
                            </p>
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
