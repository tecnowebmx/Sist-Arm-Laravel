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
        {!! Form::text('phone', $value = null, ['class' => 'input-large', 'placeholder' => 'Ingrese su correo electrónico']); !!}
    </span>
</p>
<p>
    {!! Form::label('email', 'E-mail'); !!}
    <span class="field">
        {!! Form::text('email', $value = null, ['class' => 'input-large', 'placeholder' => 'Ingrese su correo electrónico']); !!}
    </span>
</p>
<p>
    {!! Form::label('address', 'Calle y Número'); !!}
    <span class="field">
        {!! Form::text('address', $value = null, ['class' => 'input-large', 'placeholder' => 'Ingrese su correo electrónico']); !!}
    </span>
</p>
<p>
    {!! Form::label('colonia', 'Colonia'); !!}
    <span class="field">
        {!! Form::text('colonia', $value = null, ['class' => 'input-large', 'placeholder' => 'Ingrese su correo electrónico']); !!}
    </span>
</p>
<p>
    {!! Form::label('municipio', 'Municipio'); !!}
    <span class="field">
        {!! Form::text('municipio', $value = null, ['class' => 'input-large', 'placeholder' => 'Ingrese su correo electrónico']); !!}
    </span>
</p>
<p>
    {!! Form::label('state', 'Estado'); !!}
    <span class="field">
        {!! Form::text('state', $value = null, ['class' => 'input-large', 'placeholder' => 'Ingrese su correo electrónico']); !!}
    </span>
</p>
<p>
    {!! Form::label('zipcode', 'Código Postal'); !!}
    <span class="field">
        {!! Form::text('zipcode', $value = null, ['class' => 'input-large', 'placeholder' => 'Ingrese su correo electrónico']); !!}
    </span>
</p>
<p>
    {!! Form::label('solicitud_apertura_cuenta', 'Solicitud Apertura de Cuenta'); !!}
    <span class="field">
        {!! Form::select('solicitud_apertura_cuenta', config('options.lista'), null, ['class' => 'uniformselect']); !!}
    </span>
</p>
<p>
    {!! Form::label('acta_constitutiva', 'Acta Constitutiva'); !!}
    <span class="field">
        {!! Form::select('acta_constitutiva', config('options.lista'), null, ['class' => 'uniformselect']); !!}
    </span>
</p>
<p>
    {!! Form::label('contacto_isi', 'Comprobante de Domicilio'); !!}
    <span class="field">
        {!! Form::select('comprobante_domicilio', config('options.lista'), null, ['class' => 'uniformselect']); !!}
    </span>
</p>
<p>
    {!! Form::label('copia_cedula_fiscal', 'Cédula Fiscal'); !!}
    <span class="field">
        {!! Form::select('copia_cedula_fiscal', config('options.lista'), null, ['class' => 'uniformselect']); !!}
    </span>
</p>
