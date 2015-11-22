@extends('layout')

@section('content')
    <div class="pagetitle">
        <h1>Clientes</h1> <span></span>
    </div><!--pagetitle-->
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                <p><h4 class="widgettitle nomargin shadowed">Nuevo Cliente</h4></p>
                @include('users.partials.messages')
                {!! Form::open(['route' => 'customer.customer.store', 'method' => 'POST', 'class' => 'stdform stdform2']) !!}
                @include('users.partials.fields')
                <p class="stdformbutton">
                    <button class="btn btn-primary btn-rounded">Crear Cliente</button>
                    <button type="reset" class="btn">Borrar Campos</button>
                </p>
                {!! Form::close() !!}

            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->
@endsection

