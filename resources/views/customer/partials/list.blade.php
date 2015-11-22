<p></p>
<h4 class="widgettitle ctitle nomargin shadowed">Listado de la Documentación</h4>
    <div class="widgetcontent bordered shadowed">
        <div class="col-md-8">
        @foreach($files as $file)
            <p class="text-muted">
                <a target="_blank" class="btn btn-primary" href="{{ asset('uploads/'.$file->name) }}">
                    <i class="icon-file icon-white"></i>
                        {{ $file->name }}

                </a>
                <a class="btn btn-danger" href="{{ url('customers/delete-file/'.$file->id) }}">
                    <i class="icon-trash icon-white"></i>
                        Borrar
                </a>
            </p>
        @endforeach
        </div>
    </div>
