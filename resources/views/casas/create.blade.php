@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])



@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Casas'])

    <div class="container-fluid py-4">
        <div class="row">
            <div class="px-2 pt-2 col-md-10">
                @include('components.alert')
            </div>
            <div class="col-12">
              @include('components.form-casa',['route' => 'casa.store', 'method' => 'post'])
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
