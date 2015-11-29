@extends('layout')

@section('title')Vendedores
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Vendedores</h1> <span></span>
    </div><!--pagetitle-->
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                <p>
                    <a class="btn btn-primary" href="{{ route('sellers.create') }}" role="button">
                        <i class="icon-plus-sign icon-white" role="button"></i> Crear Vendedor</a>
                    <a id="btn-search" class="btn btn-rounded" href="#!" role="button">
                        <i class="iconsweets-magnifying" role="button"></i>Buscar...</a>
                    <a class="btn btn-info btn-rounded" href="{{ url("sellers/exportar-excel?name=$name&last_name=$last_name&key=$key") }}" role="button">
                        <i class="icon-download icon-white" role="button"></i> Exportar a Excel</a>
                </p>
                @include('seller.partials.search')

                @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <p>
                <h4 class="widgettitle">Hay {{ $sellers->total() }} registros</h4>
                </p>
                @include('seller.partials.table')
                {!! $sellers->render() !!}
            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->

    {!! Form::open(['route' => ['sellers.destroy', ':SELLER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}

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
                var url = form.attr('action').replace(':SELLER_ID', id);
                var data = form.serialize();

                row.fadeOut();

                jQuery.post(url, data, function(result){
                    alert(result.message);
                }).fail(function(){
                    alert('El vendedor no fue eliminado');
                    row.show();
                });
            });
        });
    </script>
@endsection