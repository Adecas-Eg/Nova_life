@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Administrar Casas'])
    @include('layouts.footers.auth.footer')


    <div class="container-fluid py-4">
        <div class="row">
            @include('components.alert')
            
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Mis Casas</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Names</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tipo de Oferta</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Estado</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tipo de Imueble</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($casas))
                                        @foreach ($casas as $casa)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>

                                                            <a href="{{ route('casa.show', $casa) }}">
                                                                {{-- arreglar mostrar la primera imagen  --}}
                                                                <img src="{{ $casa->getMedia('casas')->first()->getUrl('thumb') }}"
                                                                    class="avatar avatar-sm me-3 img  move-on-hover"
                                                                    alt="user1">

                                                            </a>
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $casa->name }} </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $casa->tipo_oferta }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    @if ($casa->status == 1)
                                                        {{-- se puede poner un modal para confirmar --}}
                                                        <a href="{{ route('casa.change_status', $casa) }}"><span
                                                                class="badge  bg-gradient-success"> Activo
                                                            </span></a>
                                                    @else
                                                        <a href="{{ route('casa.change_status', $casa) }}"><span
                                                                class="badge  bg-gradient-dark"> Inactivo
                                                            </span></a>
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $casa->tipo_inmueble }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ route('casa.edit', $casa) }}"
                                                        class=" badge  bg-gradient-info  text-xs" data-toggle="tooltip"
                                                        data-original-title="Edit">
                                                        edit
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>
                                                <h1
                                                    class="text-uppercase text-secondary text-lg font-weight-bolder opacity-7">
                                                    No tienen ninguna casa que administrar</h1>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')

@endsection
