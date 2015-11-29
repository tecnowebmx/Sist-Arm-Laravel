<div id="fields">
    {!! Form::model(Request::all(), ['route' => 'sellers.index', 'method' => 'GET', 'class' => 'stdform stdform2']) !!}
    <p>
        {!! Form::label('name', 'Nombre'); !!}
            <span class="field">
                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Nombre del Vendedor']) !!}
            </span>
    </p>
    <p>
        {!! Form::label('last_name', 'Apellidos'); !!}
            <span class="field">
                {!! Form::text('last_name', $value = null, ['class' => 'form-control', 'placeholder' => 'Apellidos del Vendedor']) !!}
            </span>
    </p>
    <p>
        {!! Form::label('key', 'Clave'); !!}
            <span class="field">
                {!! Form::text('key', $value = null, ['class' => 'form-control', 'placeholder' => 'Clave del Vendedor']) !!}
            </span>
    </p>
    <p>
        {!! Form::submit('Buscar', ['class' => 'btn btn-default']) !!}
    </p>
    {!! Form::close() !!}
</div>