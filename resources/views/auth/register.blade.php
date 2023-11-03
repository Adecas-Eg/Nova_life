@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.navbar')
    <main class="main-content  mt-0">
        {{-- informacion de arriba principal --}}
        <div class="container  pt-4">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h4 class="font-weight-bolder">Registrate</h4>
                            <p class="mb-0">Ingresa tus datos apra registrarte</p>
                        </div>
                        <div class="card-body pb-3">
                            <form method="POST" action="{{ route('register.perform') }}">
                                @csrf
                                <label>Nombre</label>
                                <div class="mb-3">
                                    <input type="text" name="username" class="form-control" placeholder="Firstaname"
                                        value="" aria-label="Name">

                                </div>
                                @error('username')
                                    <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                @enderror
                                <label>Email</label>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="" aria-label="Email">
                                </div>
                                @error('email')
                                    <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                @enderror
                                {{-- <label>Role</label>
                                <div class="mb-3">
                                    <select name="role" id="input-role" class="form-control" placeholder="Role"
                                        required="">
                                        <option value="">Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Creator</option>
                                        <option value="3">Member</option>
                                    </select>
                                </div> --}}
                                <label>Contraseña</label>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        aria-label="Password">
                                </div>
                                @error('password')
                                    <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                @enderror
                                <div class="form-check form-check-info text-left">
                                    <input name="terms" class="form-check-input " type="checkbox" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Aceptar <a href=""
                                            class=" font-weight-bolder text-gradient text-warning ">Terminos y Condiciones</a>
                                    </label>
                                    @error('terms')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="text-center ">
                                    <button type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Registrar</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-sm-4 px-1">
                            <p class="mb-4 mx-auto ">
                                Ya esta registrado?
                                <a href="{{ route('login') }}" class="text-gradient text-warning font-weight-bold">Iniciar</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                    <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-ill.jpg');
                          background-size: cover;">
                        <span class="mask bg-primary opacity-4"></span>
                        <h1 class="mt-5 text-white font-weight-bolder position-relative">Nova Life !!!!
                        </h1>
                        <p class="text-white position-relative">Just as it takes a company to sustain a product, it
                            takes a community to sustain a protocol.</p>
                    </div>
                </div>
            </div>
        </div>



    </main>
    @include('layouts.footers.guest.footer')
@endsection
{{--  --}}
