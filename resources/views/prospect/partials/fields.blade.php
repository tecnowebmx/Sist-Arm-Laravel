<p>
    {!! Form::label('contacto_isi', '¿Como conoció a isi?'); !!}
    <span class="field">
        {!! Form::select('contacto_isi', ['' => 'Seleccione', 'vendedor' => 'Vendedor', 'internet' => 'Internet'], null, ['class' => 'uniformselect']); !!}
    </span>
</p>
<p>
    {!! Form::label('name', 'Empresa'); !!}
    <span class="field">
        {!! Form::text('name', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('contact', 'Contacto'); !!}
    <span class="field">
        {!! Form::text('contact', $value = null, ['class' => 'input-large']); !!}
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
    {!! Form::label('address', 'Dirección'); !!}
    <span class="field">
        {!! Form::text('address', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('colonia', 'Colonia'); !!}
    <span class="field">
        {!! Form::text('colonia', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('municipio', 'Municipio'); !!}
    <span class="field">
        {!! Form::text('municipio', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('state', 'Estado'); !!}
    <span class="field">
        {!! Form::text('state', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('zipcode', 'Código Postal'); !!}
    <span class="field">
        {!! Form::text('zipcode', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
