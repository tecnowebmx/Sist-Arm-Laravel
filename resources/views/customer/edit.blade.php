@extends('layout')

@section('content')
    <div class="pagetitle">
        <h1>Clientes</h1> <span></span>
    </div><!--pagetitle-->
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                <p><h4 class="widgettitle nomargin shadowed">Editar Cliente {{ $customer->name }}</h4></p>
                @include('users.partials.messages')
                {!! Form::model($customer, ['route' => ['customers.update', $customer], 'method' => 'PUT', 'class' => 'stdform stdform2']) !!}
                @include('customer.partials.fields')
                <p class="stdformbutton">
                    <button class="btn btn-primary">Editar Cliente</button>
                    <button type="reset" class="btn">Borrar Campos</button>
                </p>
                {!! Form::close() !!}

            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->
@endsection

