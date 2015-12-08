@extends('layout')

@section('content')
    <div class="pagetitle">
        <h1>Maquinaria</h1> <span></span>
    </div><!--pagetitle-->
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                <p>
                    <a class="btn btn-primary" href="{{ route('machines.create') }}" role="button">
                        <i class="icon-plus-sign icon-white" role="button"></i> Crear Maquinaria</a>
                    <a id="btn-search" class="btn btn-rounded" href="#!" role="button">
                        <i class="iconsweets-magnifying" role="button"></i>Buscar...</a>
                </p>

                @include('machine.partials.search')

                @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <p>
                    <h4 class="widgettitle">Hay {{ $machines->total() }} registros</h4>
                </p>
                @include('machine.partials.table')
                {{ $machines->render() }}
            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->

    {!! Form::open(['route' => ['machines.destroy', ':MACHINES_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}

    {!! Form::close() !!}

@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function(){
            jQuery('.btn-delete').click(function(e){

                e.preventDefault();

                var row = jQuery(this).parents('tr');
                var id = row.data('id');
                var form = jQuery('#form-delete');
                var url = form.attr('action').replace(':MACHINES_ID', id);
                var data = form.serialize();

                row.fadeOut();

                jQuery.post(url, data, function(result){
                    alert(result.message);
                }).fail(function(){
                    alert('La maquinaria no fue eliminada');
                    row.show();
                });
            });
        });
    </script>
@endsection