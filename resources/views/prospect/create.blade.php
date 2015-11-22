@extends('layout')

@section('content')
    <div class="pagetitle">
        <h1>Prospectos</h1> <span></span>
    </div><!--pagetitle-->
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                <p><h4 class="widgettitle nomargin shadowed">Nuevo Prospecto</h4></p>
                @include('prospect.partials.messages')
                {!! Form::open(['route' => 'prospects.store', 'method' => 'POST', 'class' => 'stdform stdform2']) !!}
                @include('prospect.partials.fields')
                <p class="stdformbutton">
                    <button class="btn btn-primary btn-rounded">Crear Prospecto</button>
                    <button type="reset" class="btn">Borrar Campos</button>
                </p>
                {!! Form::close() !!}

            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->
@endsection

