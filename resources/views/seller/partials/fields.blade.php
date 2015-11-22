<p>
    {!! Form::label('name', 'Nombre'); !!}
    <span class="field">
        {!! Form::text('name', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('last_name', 'Apellidos'); !!}
    <span class="field">
        {!! Form::text('last_name', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('key', 'Clave'); !!}
    <span class="field">
        {!! Form::text('key', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('phone', 'Teléfono'); !!}
    <span class="field">
        {!! Form::text('phone', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('email', 'E-mail'); !!}
    <span class="field">
        {!! Form::text('email', $value = null, ['class' => 'input-large', 'placeholder' => 'Ingrese su correo electrónico']); !!}
    </span>
</p>
<p>
    {!! Form::label('fecha_ingreso', 'Fecha de Ingreso'); !!}
    <span class="field">
        {!! Form::date('fecha_ingreso', \Carbon\Carbon::now()); !!}
    </span>
</p>