@extends('layout')

@section('content')
    <div class="pagetitle">
        <h1>Prospectos</h1> <span></span>
    </div><!--pagetitle-->
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                <p><h4 class="widgettitle nomargin shadowed">Editar Propecto {{ $prospect->name }}</h4></p>
                @include('prospect.partials.messages')
                {!! Form::model($prospect, ['route' => ['prospects.update', $prospect], 'method' => 'PUT', 'class' => 'stdform stdform2']) !!}
                @include('prospect.partials.fields')
                <p class="stdformbutton">
                    <button class="btn btn-primary">Editar Prospecto</button>
                    <button type="reset" class="btn">Borrar Campos</button>
                </p>
                {!! Form::close() !!}

            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->
@endsection

