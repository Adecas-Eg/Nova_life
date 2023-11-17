<div class="multisteps-form">
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto mt-4 mb-sm-5 mb-3">
            <div class="multisteps-form__progress">
                <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                    <span>1. Datos principales del inmueble</span>
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
                action="{{ route($route, isset($casa) ? $casa : null) }}" method="post" role="form"
                enctype="multipart/form-data">
                @csrf
                @method($method)

                <input type="text" name="geometry" style="display: none">
                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                    data-animation="FadeIn">
                    <h5 class="font-weight-bolder">1.Datos principales</h5>
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <label>Nombre del inmueble</label>
                                <input class="multisteps-form__input form-control" type="text" name="name"
                                    value="{{ old('name', isset($casa) ? $casa->name : null) }}" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                                @include('components.validator', ['var' => 'name'])
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <label>Tipo de oferta</label>
                                <select class="form-select" name="tipo_oferta" {{ old('tipo_oferta') }}>
                                    <option value="venta" @if (isset($casa) && $casa->tipo_oferta === 'venta') selected @endif>
                                        Venta
                                    </option>
                                    <option value="arriendo" @if (isset($casa) && $casa->tipo_oferta === 'arriendo') selected @endif>
                                        Arriendo</option>
                                </select>
                                @include('components.validator', ['var' => 'tipo_oferta'])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{-- cambiar a text area --}}
                                    <label for="example-text-input" class="form-control-label">Descripcion</label>
                                    <textarea class="form-control" name="descripcion">{{ old('descripcion', isset($casa) ? $casa->descripcion : null) }}</textarea>
                                    @include('components.validator', ['var' => 'descripcion'])

                                </div>

                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <label class="mt-4">Tipo de inmueble</label>
                                <select class="form-select" aria-label="Default select example" name="tipo_inmueble">
                                    apartamento
                                    <option value="apartamento" @if (isset($casa) && $casa->tipo_inmueble == 'apartamento') selected @endif>
                                        Apartamento</option>
                                    <option value="apartaestudio" @if (isset($casa) && $casa->tipo_inmueble == 'apartaestudio') selected @endif>
                                        Apartaestudio</option>
                                    <option value="casa" @if (isset($casa) && $casa->tipo_inmueble == 'casa') selected @endif>
                                        Casa
                                    </option>
                                    <option value="cabaña" @if (isset($casa) && $casa->tipo_inmueble == 'cabaña') selected @endif>
                                        Cabaña
                                    </option>
                                    <option value="Habitacion" @if (isset($casa) && $casa->tipo_inmueble == 'Habitacion') selected @endif>
                                        Habitacion
                                    </option>
                                    <option value="bodega" @if (isset($casa) && $casa->tipo_inmueble == 'bodega') selected @endif>
                                        Bodega
                                    </option>
                                    @include('components.validator', [
                                        'var' => 'tipo_inmueble',
                                    ])
                                </select>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Estrato</label>
                                    <select class="form-select" aria-label="Default select example" name="estrato">
                                        <option value="1" @if (isset($casa) && $casa->estrato === '1') selected @endif>1
                                        </option>

                                        <option value="2" @if (isset($casa) && $casa->estrato === '2') selected @endif>2
                                        </option>

                                        <option value="3" @if (isset($casa) && $casa->estrato === '3') selected @endif>3
                                        </option>
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
                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Multimedia</h5>
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Imagenes</label>
                                <div action="/file-upload" class="form-control dropzone" id="dropzone">
                                    <div class="fallback">
                                        @isset($casa)
                                            @foreach ($casa->media as $image)
                                                {{ $image->getUrl('thumb') }}
                                            @endforeach

                                        @endisset

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

                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12">

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Direccion</label>
                                    <input class="multisteps-form__input form-control" type="text"
                                        value="{{ old('direccion', isset($casa) ? $casa->dirrecion : null) }}"
                                        name="direccion" id="ubicacion" onfocus="focused(this)"
                                        onfocusout="defocused(this)">
                                    @include('components.validator', ['var' => 'direccion'])

                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Departamento</label>
                                    <input class="multisteps-form__input form-control" type="text"
                                        value="New York" name="departamento"
                                        value="{{ old('departamento', isset($casa) ? $casa->departamento : null) }}"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                    @include('components.validator', ['var' => 'departamento'])
                                </div>
                            </div>
                            <div class="col-12 mt-3">

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Ciudad</label>
                                    <input class="multisteps-form__input form-control" type="text" name="ciudad"
                                        {{ old('ciudad', isset($casa) ? $casa->ciudad : null) }}
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                    @include('components.validator', ['var' => 'ciudad'])

                                </div>
                            </div>
                            <div class="row">
                                <div class="button-row d-flex mt-4 col-12">
                                    <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                        title="Prev">Anterior</button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                        title="Next">Siguiente</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Espacios</h5>
                    <div class="multisteps-form__content mt-3">
                        <div class="row">
                            <div class="col-3">
                                <label>Valor del inmueble</label>
                                <input class="multisteps-form__input form-control" type="text" name="precio"
                                    value="{{ old('precio', isset($casa) ? $casa->precio : null) }}"
                                    placeholder="$300.000.000" onfocus="focused(this)" onfocusout="defocused(this)">
                                @include('components.validator', ['var' => 'precio'])

                            </div>
                            <div class="col-6">
                                <label>Antiguedad
                                    del inmueble (Años)</label>
                                <input class=" multisteps-form__input form-control" type="number" name="antiguedad"
                                    value="{{ old('antiguedad', isset($casa) ? $casa->antiguedad : null) }}"
                                    onfocus="focused(this)" placeholder="20" onfocusout="defocused(this)">
                                @include('components.validator', ['var' => 'antiguedad'])

                            </div>
                            <div class="col-3">
                                {{-- cambiar amunto o decremento --}}
                                <label>N° Baños</label>
                                <input class="multisteps-form__input form-control" type="number"
                                    value="{{ old('baños', isset($casa) ? $casa->baños : null) }}" name="baños">
                                @include('components.validator', ['var' => 'baños'])

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                {{-- cambiar a text area --}}
                                <label>N° Parqueaderos</label>
                                <input class="multisteps-form__input form-control" type="number"
                                    value="{{ old('parqueaderos', isset($casa) ? $casa->parqueaderos : null) }}"
                                    name="parqueaderos">
                                @include('components.validator', ['var' => 'parqueaderos'])

                            </div>
                            <div class="col-6">
                                {{-- cambiar a text area --}}
                                <label>Area
                                    m<sup>2</sup></label>
                                <input class="form-control multisteps-form__input" type="number" name="area"
                                    value="{{ old('area', isset($casa) ? $casa->area : null) }}">
                                <div class="notification is-danger">
                                    @include('components.validator', ['var' => 'area'])
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    {{-- cambiar a text area --}}
                                    <label for="asas" class="form-control-label">N° Pisos</label>
                                    <input class="form-control align-content-between multisteps-form__input"
                                        type="number" value="{{ old('pisos', isset($casa) ? $casa->pisos : null) }}"
                                        name="pisos">
                                    @include('components.validator', ['var' => 'pisos'])
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    {{-- cambiar a text area --}}
                                    <label for="asas" class="form-control-label">Reccorido 3d</label>
                                    <input class="form-control align-content-between multisteps-form__input"
                                        type="text" name="url_3d"
                                        value="{{ old('url_3d', isset($casa) ? $casa->url_3d : null) }}">
                                    @include('components.validator', ['var' => 'url_3d'])
                                </div>
                            </div>
                        </div>
                        <input type="file" id="archivoInput" style="display: none;" name="imagenes[]">

                        <div class="button-row d-flex mt-2">
                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                title="Prev">Anterior</button>
                            <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" id="copiarArchivo"
                                title="Send">Crear</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
