@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])



@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Casas'])

    <div class="container-fluid py-4">
        <div class="row">
            <div class="px-2 pt-2 col-md-10">
                @include('components.alert')
            </div>
            <div class="col-12">
                <div class="multisteps-form">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto mt-4 mb-sm-5 mb-3">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                                    1. Datos principales del inmueble
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Multimedia">2.
                                    Multimedia</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Ubicacion">3.
                                    Ubicacion</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Espacios">4.
                                    Espacios</button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form mb-8" style="height: 406px;" id="miFormulario"
                                action="{{ route('casa.store') }}" method="post" role="form"
                                enctype="multipart/form-data">

                                @csrf

                                <input type="text" name="geometry" style="display: none">
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">1.Datos principales</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>Nombre</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    name="name" value="{{ old('name') }}" onfocus="focused(this)"
                                                    onfocusout="defocused(this)">
                                                @include('components.validator', ['var' => 'name'])
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Tipo de oferta</label>
                                                <select class="form-select" name="tipo_oferta" {{ old('tipo_oferta') }}>
                                                    <option value="Venta">Venta</option>
                                                    <option value="Arriendo">Arriendo</option>
                                                    <option value="Alquiler">Alquiler</option>
                                                </select>
                                                @include('components.validator', ['var' => 'tipo_oferta'])
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    {{-- cambiar a text area --}}
                                                    <label for="example-text-input"
                                                        class="form-control-label">Descripcion</label>
                                                    <textarea class="form-control" name="descripcion" {{ old('descripcion') }}></textarea>
                                                    @include('components.validator', ['var' => 'descripcion'])
                                                </div>

                                            </div>
                                            <div class="col-sm-6 mt-sm-0 mt-4">
                                                <label class="mt-4">Tipo de inmueble</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="tipo_inmueble">
                                                    <option value="apartamento">Apartamento</option>
                                                    <option value="apartaestudio">Apartaestudio</option>
                                                    <option value="casa">Casa</option>
                                                    <option value="cabaña">Cabaña</option>
                                                    <option value="habitacion">Habitacion</option>
                                                    <option value="bodega">Bodega</option>

                                                    @include('components.validator', [
                                                        'var' => 'tipo_inmueble',
                                                    ])

                                                </select>
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label">Estrato</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="estrato">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                    @include('components.validator', ['var' => 'estrato'])

                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                title="Next">Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Multimedia</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label>Imagenes</label>
                                                <div action="/file-upload" class="form-control dropzone" id="dropzone">
                                                    <div class="fallback">

                                                    </div>
                                                </div>
                                                @include('components.validator', ['var' => 'imagenes'])

                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                title="Prev">Anterior</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                title="Next">Siguiente</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                    data-animation="FadeIn">
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">

                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label">Direccion</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        value="{{ old('direccion') }}" name="direccion" id="ubicacion"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                    @include('components.validator', ['var' => 'direccion']);


                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label">Departamento</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        value="New York" name="departamento"
                                                        value="{{ old('departamento') }}" onfocus="focused(this)"
                                                        onfocusout="defocused(this)">
                                                    @include('components.validator', ['var' => 'departamento'])

                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">

                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label">Ciudad</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        name="ciudad" {{ old('ciudad') }} onfocus="focused(this)"
                                                        onfocusout="defocused(this)">
                                                    @include('components.validator', ['var' => 'ciudad'])


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="button-row d-flex mt-4 col-12">
                                                    <button class="btn bg-gradient-secondary mb-0 js-btn-prev"
                                                        type="button" title="Prev">Anterior</button>
                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                        type="button" title="Next">Siguiente</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Espacios</h5>
                                    <div class="multisteps-form__content mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <label>Valor del inmueble</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    name="precio" value="{{ old('precio') }}" placeholder="$300.000.000"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @include('components.validator', ['var' => 'precio'])


                                            </div>
                                            <div class="col-6">
                                                <label>Antiguedad
                                                    del inmueble (Años)</label>
                                                <input class=" multisteps-form__input form-control" type="number"
                                                    name="antiguedad" value="{{ old('antiguedad') }}"
                                                    onfocus="focused(this)" placeholder="20"
                                                    onfocusout="defocused(this)">
                                                @include('components.validator', ['var' => 'antiguedad'])

                                            </div>
                                            <div class="col-3">
                                                {{-- cambiar amunto o decremento --}}
                                                <label>N° Baños </label>
                                                <input class="multisteps-form__input form-control" type="number"
                                                    value="{{ old('baños') }}" name="baños">
                                                @include('components.validator', ['var' => 'baños'])

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                {{-- cambiar a text area --}}
                                                <label>N° Parqueaderos</label>
                                                <input class="multisteps-form__input form-control" type="number"
                                                    value="{{ old('parqueaderos') }}" name="parqueaderos">
                                                @include('components.validator', ['var' => 'parqueaderos'])

                                            </div>
                                            <div class="col-6">
                                                {{-- cambiar a text area --}}
                                                <label>Area
                                                    m<sup>2</sup></label>
                                                <input class="form-control multisteps-form__input" type="number"
                                                    name="area" value="{{ old('area') }}">
                                                <div class="notification is-danger">
                                                    @include('components.validator', ['var' => 'area'])
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    {{-- cambiar a text area --}}
                                                    <label for="asas" class="form-control-label">N° Pisos</label>
                                                    <input
                                                        class="form-control align-content-between multisteps-form__input"
                                                        type="number" value="{{ old('pisos') }}" name="pisos">
                                                    @include('components.validator', ['var' => 'pisos'])
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    {{-- cambiar a text area --}}
                                                    <label for="asas" class="form-control-label">Reccorido 3d</label>
                                                    <input
                                                        class="form-control align-content-between multisteps-form__input"
                                                        type="text" name="url_3d" value="{{ old('url_3d') }}">
                                                    @include('components.validator', ['var' => 'url_3d'])
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" id="archivoInput" style="display: none;"
                                            name="imagenes[]">

                                        <div class="button-row d-flex mt-2">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                title="Prev">Anterior</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="submit"
                                                id="copiarArchivo" title="Send">Crear</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
@endsection

@push('js')
    {{-- aitpcp,´letar --}}
    <script src="{{ asset('/assets/js/autocomplete.js') }}"></script>
    {{-- scrrip de de dropzone --}}
    <script src="{{ asset('/assets/js/plugins/wizzard.js') }}"></script>

    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var drop = document.getElementById('dropzone')
        const dropzone = new Dropzone(drop, {
            url: 'data:text/plain;', // URL ficticia para evitar errores
            autoProcessQueue: false, // Desactiva la carga automática
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 3,
            addRemoveLinks: true
        });


        document.getElementById('copiarArchivo').addEventListener('click', function() {
            // Utiliza el evento addedfile para copiar archivos después de que se agreguen a Dropzone
            const archivosDropzone = dropzone.files;

            // Obtén el input de archivo
            const archivoInput = document.getElementById('archivoInput');

            // Crea un objeto DataTransfer para copiar los archivos
            const dataTransfer = new DataTransfer();

            // Copia los archivos de Dropzone al objeto DataTransfer
            archivosDropzone.forEach(function(file) {
                dataTransfer.items.add(file);
            });

            // Asigna el objeto DataTransfer al input de archivo
            archivoInput.files = dataTransfer.files;
        });


        // Manejador de eventos para verificar si los archivos se copiaron
    </script>
@endpush
