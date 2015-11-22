<p>
    {!! Form::label('name', 'Nombre'); !!}
    <span class="field">
        {!! Form::text('name', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('username', 'Usuario'); !!}
    <span class="field">
        {!! Form::text('username', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('password', 'Contraseña'); !!}
    <span class="field">
        {!! Form::password('password', '', ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('email', 'E-mail'); !!}
    <span class="field">
        {!! Form::text('email', $value = null, ['class' => 'input-large', 'placeholder' => 'Ingrese su correo electrónico']); !!}
    </span>
</p>
<p>
    {!! Form::label('type', 'Tipo de Usuario'); !!}
    <span class="field">
        {!! Form::select('type', ['' => 'Seleccione', 'admin' => 'Administrador', 'operaciones' => 'Operaciones'], null, ['class' => 'uniformselect']); !!}
    </span>
</p>