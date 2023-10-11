@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@push('js')
    <script type="module" src="{{ asset('/assets/js/autocomplete.js') }}"></script>
@endpush

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Casas'])


    <div class="container-fluid py-4">

        <div class="row">
            {{-- muestra que el inmueble fue creatdo satisfactoriamente --}}
            <div class="px-2 pt-2 col-md-10">
                @if (session('status'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <p class="text-white mb-0">{{ session('status') }}</p>
                    </div>
                @endif
                @if ($message = session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        <p class="text-white mb-0">{{ session('status') }}</p>
                    </div>
                @endif

            </div>
            {{-- comiezo del formulario --}}
            <form id="miFormulario" action="{{ route('casa.store') }}" method="post" role="form"
                enctype="multipart/form-data">

                @csrf


                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">

                            <p class="text-uppercase text-sm">Creacion de inmueble</p>
                            <input type="text" name="geometry" style="display: none">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nombre</label>
                                        <input class="form-control" type="text" name="name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>

                                {{-- desplegable de tio de oferta --}}
                                <div class="col-md-4">
                                    {{-- Cambiar a variables --}}
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tipo de oferta</label>
                                        <select class="form-select" aria-label="Default select example" name="tipo_oferta"
                                            {{ old('tipo_oferta') }}>
                                            <option value="Arriendo" selected>Seleccionar</option>
                                            <option value="Venta">Venta</option>
                                            <option value="Arriendo">Arriendo</option>
                                            <option value="Alquiler">Alquiler</option>
                                        </select>
                                        @error('tipo_oferta')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>

                                {{-- dropdown de tippo de inmueble modificado  --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tipo Inmueble</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="tipo_inmueble">
                                            <option selected>Seleccionar</option>
                                            <option value="apartamento">Apartamento</option>
                                            <option value="apartaestudio">Apartaestudio</option>
                                            <option value="casa">Casa</option>
                                            <option value="cabaña">Cabaña</option>
                                            <option value="habitacion">Habitacion</option>
                                            <option value="bodega">Bodega</option>

                                            @error('tipo_inmueble')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Estrato</label>
                                        <select class="form-select" aria-label="Default select example" name="estrato">
                                            <option value="0" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        @error('estrato')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Valor del
                                            inmueble</label>
                                        <input class="form-control" type="number" name="precio"
                                            value="{{ old('precio') }}">
                                        @error('precio')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <hr class="horizontal dark">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Direccion</label>
                                        <input class="form-control" type="text" value="{{ old('direccion') }}"
                                            name="direccion" id="ubicacion">
                                        @error('direccion')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Departamento</label>
                                        <input class="form-control" type="text" value="New York" name="departamento"
                                            value="{{ old('departamentp') }}">
                                        @error('departamento')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Ciudad</label>
                                        <input class="form-control" type="text" name="ciudad" {{ old('ciudad') }}>
                                        @error('ciudad')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- cambiar a text area --}}
                                        <label for="example-text-input" class="form-control-label">Descripcion</label>
                                        <input class="form-control" type="text"
                                            value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source."
                                            name="descripcion" {{ old('descripcion') }}>
                                        @error('descripcion')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Espacios</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{-- cambiar amunto o decremento --}}
                                        <label class="form-control-label">N° Baños</label>
                                        <input class="form-control align-content-between" type="number"
                                            value="{{ old('baños') }}" name="baños">
                                        @error('baños')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{-- cambiar a text area --}}
                                        <label for="asas" class="form-control-label">N° Parqueaderos</label>
                                        <input class="form-control align-content-between" type="number"
                                            value="{{ old('parqueaderos') }}" name="parqueaderos">
                                        @error('parqueaderos')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{-- cambiar a text area --}}
                                        <label for="asas" class="form-control-label">N° Pisos</label>
                                        <input class="form-control align-content-between" type="number"
                                            value="{{ old('pisos') }}" name="pisos">
                                        @error('pisos')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{-- cambiar a text area --}}
                                        <label for="asas" class="form-control-label">Area m<sup>2</sup></label>
                                        <input class="form-control align-content-between" type="number" name="area"
                                            value="{{ old('area') }}">
                                        <div class="notification is-danger">
                                            @error('area')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>


                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        {{-- cambiar a text area --}}
                                        <label for="asas" class="form-control-label">Imagenes del inmuebles</label>
                                        <input class="form-control align-content-between" type="file"
                                            name="imagenes[]" multiple>
                                        @error('imagenes')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        {{-- cambiar a text area --}}
                                        <label for="asas" class="form-control-label">Reccorido 3d</label>
                                        <input class="form-control align-content-between" type="text" name="url_3d"
                                            value="{{ old('url_3d') }}">
                                        @error('url_3d')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>

                                <button onclick="enviar()" type="submit"
                                    class="btn btn-block bg-gradient-dark mb-3">Guardar</button>


                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>


        @include('layouts.footers.auth.footer')
    </div>
@endsection
