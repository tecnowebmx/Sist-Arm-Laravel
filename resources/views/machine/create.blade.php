@extends('layout')

@section('content')
    <div class="pagetitle">
        <h1>Máquinaria</h1> <span></span>
    </div><!--pagetitle-->
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                <p><h4 class="widgettitle nomargin shadowed">Nueva Máquinaria</h4></p>
                @include('users.partials.messages')
                {!! Form::open(['route' => 'machines.store', 'method' => 'POST', 'class' => 'stdform stdform2']) !!}
                @include('machine.partials.fields')
                <p class="stdformbutton">
                    <button class="btn btn-primary btn-rounded">Crear Maquinaria</button>
                    <button type="reset" class="btn">Borrar Campos</button>
                </p>
                {!! Form::close() !!}

            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->
@endsection

