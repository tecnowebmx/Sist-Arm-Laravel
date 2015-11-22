<div id="fields">
    {!! Form::model(Request::all(), ['route' => 'prospects.index', 'method' => 'GET', 'class' => 'stdform stdform2']) !!}
        <p>
            {!! Form::label('name', 'Nombre'); !!}
            <span class="field">
                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Empresa']) !!}
            </span>
        </p>
        <p>
            {!! Form::label('contact', 'Contacto'); !!}
            <span class="field">
                {!! Form::text('contact', $value = null, ['class' => 'form-control', 'placeholder' => 'Nombre del Contacto']) !!}
            </span>
        </p>
        <p>
            {!! Form::submit('Buscar', ['class' => 'btn btn-default']) !!}
        </p>
    {!! Form::close() !!}
</div>