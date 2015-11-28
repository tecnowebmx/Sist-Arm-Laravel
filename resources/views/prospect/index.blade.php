@extends('layout')

@section('title')Prospectos
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Prospectos</h1> <span></span>
    </div><!--pagetitle-->

    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                <p>
                    <a class="btn btn-primary btn-rounded" href="{{ route('prospects.create') }}" role="button">
                        <i class="icon-plus-sign icon-white" role="button"></i> Crear Prospecto</a>
                    <a id="btn-search" class="btn btn-rounded" href="#!" role="button">
                        <i class="iconsweets-magnifying" role="button"></i> Buscar...</a>
                    <a class="btn btn-info btn-rounded" href="{{ url("prospects/exportar-excel?name=$name&contact=$contact") }}" role="button">
                        <i class="icon-download icon-white" role="button"></i> Exportar a Excel</a>
                </p>

                @include('prospect.partials.search')

                @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif

                <p>
                    <h4 class="widgettitle">Hay {{ $prospects->total() }} registros</h4>
                </p>
                @include('prospect.partials.table')
                {!! $prospects->appends(Request::only(['name', 'type']))->render() !!}
            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->

    {!! Form::open(['route' => ['prospects.destroy', ':PROSPECT_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}

    {!! Form::close() !!}

@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function(){

            jQuery("#fields").hide();

            jQuery("#btn-search").click(function () {
                jQuery("#fields").each(function() {
                    displaying = jQuery(this).css("display");
                    if(displaying == "block") {
                        jQuery(this).fadeOut('slow',function() {
                            jQuery(this).css("display","none");
                        });
                    } else {
                        jQuery(this).fadeIn('slow',function() {
                            jQuery(this).css("display","block");
                        });
                    }
                });
            });

            jQuery('.btn-delete').click(function(e){

                e.preventDefault();

                var row = jQuery(this).parents('tr');
                var id = row.data('id');
                var form = jQuery('#form-delete');
                var url = form.attr('action').replace(':PROSPECT_ID', id);
                var data = form.serialize();

                row.fadeOut();

                jQuery.post(url, data, function(result){
                    alert(result.message);
                    location.reload();
                }).fail(function(){
                    alert('El prospecto no fue eliminado');
                    row.show();
                });
            });
        });
    </script>
@endsection