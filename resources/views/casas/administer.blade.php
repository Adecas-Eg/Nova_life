@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Administrar Casas'])


    @include('components.table', ['titulo' => 'Mis inmuebles', 'casas' => isset($casas) ? $casa : null])

    @include('layouts.footers.auth.footer')
@endsection
