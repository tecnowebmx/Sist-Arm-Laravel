@extends('layout')

@section('content')
    <div class="pagetitle">
        <h1>Usuarios</h1> <span></span>
    </div><!--pagetitle-->
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                <p><a class="btn btn-primary" href="{{ route('users.create') }}" role="button">
                        <i class="icon-plus-sign icon-white" role="button"></i> Crear Usuario</a>
                <h4 class="widgettitle">Hay {{ $users->total() }} registros</h4>
                </p>
                @include('users.partials.table')
                {!! $users->render() !!}
            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->
@endsection