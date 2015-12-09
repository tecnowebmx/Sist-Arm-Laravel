<div id="fields">
    {!! Form::model(Request::all(), ['route' => 'machines.index', 'method' => 'GET', 'class' => 'stdform stdform2']) !!}
    <p>
        {!! Form::label('id', 'ID'); !!}
            <span class="field">
                {!! Form::text('id', $value = null, ['class' => 'form-control', 'placeholder' => 'ID de la máquina']) !!}
            </span>
    </p>
    <p>
        {!! Form::label('name', 'Máquina'); !!}
            <span class="field">
                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Maquina']) !!}
            </span>
    </p>
    <p>
        {!! Form::label('brand', 'Marca'); !!}
            <span class="field">
                {!! Form::text('brand', $value = null, ['class' => 'form-control', 'placeholder' => 'Marca de la Máquina']) !!}
            </span>
    </p>
    <p>
        {!! Form::label('model', 'Modelo'); !!}
            <span class="field">
                {!! Form::text('model', $value = null, ['class' => 'form-control', 'placeholder' => 'Modelo de la Máquina']) !!}
            </span>
    </p>
    <p>
        {!! Form::label('series', 'Serie'); !!}
            <span class="field">
                {!! Form::text('series', $value = null, ['class' => 'form-control', 'placeholder' => 'Serie de la Máquina']) !!}
            </span>
    </p>
    <p>
        {!! Form::label('year', 'Año'); !!}
            <span class="field">
                {!! Form::text('year', $value = null, ['class' => 'form-control', 'placeholder' => 'Año del Equipo']) !!}
            </span>
    </p>
    <p>
        {!! Form::label('availability', 'Disponibilidad'); !!}
             <span class="field">
                {!! Form::select('availability', config('options.disponibilidad'), null, ['class' => 'uniformselect', 'placeholder' => 'Seleccione']); !!}
            </span>
    </p>
    <p>
        {!! Form::submit('Buscar', ['class' => 'btn btn-default']) !!}
    </p>
    {!! Form::close() !!}
</div>