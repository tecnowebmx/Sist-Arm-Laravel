@extends('layout')

@section('title')Clientes
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Clientes</h1> <span></span>
    </div><!--pagetitle-->
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                <p><!-- <a class="btn btn-primary" href="{{ route('customers.create') }}" role="button">
                        <i class="icon-plus-sign icon-white" role="button"></i> Crear Cliente</a>-->
                    <a id="btn-search" class="btn btn-rounded" href="#!" role="button">
                        <i class="iconsweets-magnifying" role="button"></i> Buscar...</a>
                    <a class="btn btn-info btn-rounded" href="{{ url("customers/exportar-excel?name=$name&contact=$contact") }}" role="button">
                        <i class="icon-download icon-white" role="button"></i> Exportar a Excel</a>
                </p>

                @include('customer.partials.search')

                @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <p>
                <h4 class="widgettitle">Hay {{ $customers->total() }} registros</h4>
                </p>

                @include('customer.partials.table')
                {!! $customers->render() !!}
            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->

    {!! Form::open(['route' => ['customers.destroy', ':CUSTOMER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}

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
                var url = form.attr('action').replace(':CUSTOMER_ID', id);
                var data = form.serialize();

                row.fadeOut();

                jQuery.post(url, data, function(result){
                    alert(result.message);
                    location.reload();
                }).fail(function(){
                    alert('El cliente no fue eliminado');
                    row.show();
                });
            });
        });
    </script>
@endsection