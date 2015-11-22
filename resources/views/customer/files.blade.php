@extends('layout')

@section('css')
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Subir Archivos del cliente {{ $customer->name }}</h1> <span></span>
    </div><!--pagetitle-->
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="row-fluid">
                {!! Form::open(['url'=> ['customers/add', $customer],  'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                <div class="dz-message" style="height:200px;">
                    Arrastra tus archivos aquí
                </div>
                <div class="dropzone-previews"></div>
                <button type="submit" class="btn btn-success" id="submit">Save</button>
                {!! Form::close() !!}
                @include('customer.partials.list')
            </div><!--contentinner-->
        </div><!--contentinner-->
    </div><!--maincontent-->

@endsection

@section('scripts')
    {!! Html::script('js/dropzone.js'); !!}
    <script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 2,

            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;

                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("Arcvhivo Listo");
                });

                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success",
                        myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>
@endsection