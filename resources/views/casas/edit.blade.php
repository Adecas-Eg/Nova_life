@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Casa - ' . $casa->name])


    <div class="container-fluid py-4">

        <div class="row">
            {{-- muestra que el inmueble fue creatdo satisfactoriamente --}}
            <div class="px-2 pt-2 col-md-10">
                @if (session('info'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-icon alert text-white"><i class="ni ni-like-2"></i></span>
                        <span class="text-white mb-0">{{ session('info') }}</span>
                    </div>
                @endif
                @if ($message = session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        <p class="text-white mb-0">{{ session('info') }}</p>
                    </div>
                @endif

            </div>
            {{-- comiezo del formulario --}}
            <form action="{{ route('casa.update', $casa) }}" method="post" role="form" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">

                            <p class="text-uppercase text-sm">Editar inmueble</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nombre</label>
                                        <input class="form-control" type="text" name="name"
                                            value="{{ $casa->name }}">
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
                                            value="{{ $casa->tipo_oferta }}">
                                            <option value="venta" @if ($casa->tipo_oferta === 'venta') selected @endif>Venta
                                            </option>
                                            <option value="arriendo" @if ($casa->tipo_oferta === 'arriendo') selected @endif>
                                                Arriendo</option>
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
                                            <option value="1" @if ($casa->tipo_inmueble == '1') selected @endif>
                                                Apartamento</option>
                                            <option value="2" @if ($casa->tipo_inmueble == '2') selected @endif>Casa
                                            </option>
                                            <option value="3" @if ($casa->tipo_inmueble == '3') selected @endif>Local
                                            </option>
                                            <option value="4" @if ($casa->tipo_inmueble == '4') selected @endif>Lote
                                            </option>
                                            @error('tipo_inmueble')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Estrato</label>
                                        <select class="form-select" aria-label="Default select example" name="estrato"
                                            value="{{ $casa->estrato }}">

                                            <option value="1" @if ($casa->estrato === '1') selected @endif>1
                                            </option>

                                            <option value="2" @if ($casa->estrato === '2') selected @endif>2
                                            </option>

                                            <option value="3" @if ($casa->estrato === '3') selected @endif>3
                                            </option>

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
                                            value="{{ old('precio', $casa->precio) }}">
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
                                        <input class="form-control" type="text" name="direccion"
                                            value="{{ old('direccion', $casa->direccion) }}">
                                        @error('direccion')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Departamento</label>
                                        <input class="form-control" type="text" value="New York" name="departamento"
                                            value="{{ old('departamento', $casa->departamento) }}">
                                        @error('departamento')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Ciudad</label>
                                        <input class="form-control" type="text" name="ciudad"
                                            value="{{ old('ciudad', $casa->ciudad) }}">
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
                                            name="descripcion" value="{{ old('descripcion', $casa->descripcion) }}">
                                        @error('descripcion')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Antiguedad del
                                            inmueble</label>
                                        <input class="form-control" type="number" name="precio"
                                            value="{{ old('antiguedad') }}">
                                        @error('antiguedad')
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
                                        <input class="form-control align-content-between" type="text"
                                            value="{{ old('baños', $casa->baños) }}" name="baños">
                                        @error('baños')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{-- cambiar a text area --}}
                                        <label for="asas" class="form-control-label">N° Parqueaderos</label>
                                        <input class="form-control align-content-between" type="text"
                                            value="{{ old('parqueaderos', $casa->parqueaderos) }}" name="parqueaderos">
                                        @error('parqueaderos')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{-- cambiar a text area --}}
                                        <label for="asas" class="form-control-label">N° Pisos</label>
                                        <input class="form-control align-content-between" type="text"
                                            value="{{ old('pisos', $casa->pisos) }}" name="pisos">
                                        @error('pisos')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{-- cambiar a text area --}}
                                        <label for="asas" class="form-control-label">Area m<sup>2</sup></label>
                                        <input class="form-control align-content-between" type="text" name="area"
                                            value="{{ old('area', $casa->area) }}">
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
                                            value="{{ old('url_3d', $casa->url_3d) }}">
                                        @error('url_3d')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary text-white">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
