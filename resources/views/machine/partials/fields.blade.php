<p>
    {!! Form::label('name', 'Máquina'); !!}
    <span class="field">
        {!! Form::text('name', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('brand', 'Marca'); !!}
    <span class="field">
        {!! Form::text('brand', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('model', 'Modelo'); !!}
    <span class="field">
        {!! Form::text('model', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('series', 'Serie'); !!}
    <span class="field">
        {!! Form::text('series', $value = null, ['class' => 'input-large']); !!}
    </span>
</p>
<p>
    {!! Form::label('year', 'Año'); !!}
    <span class="field">
        {!! Form::text('year', $value = null, ['class' => 'input-medium']); !!}
    </span>
</p>
<p>
    {!! Form::label('original_number', 'Número Original'); !!}
    <span class="field">
        {!! Form::text('original_number', $value = null, ['class' => 'input-small']); !!}
    </span>
</p>
<p>
    {!! Form::label('horometro', 'Horometro'); !!}
    <span class="field">
        {!! Form::text('horometro', $value = null, ['class' => 'input-small']); !!}
    </span>
</p>
<p>
    {!! Form::label('motor', 'Motor'); !!}
    <span class="field">
        {!! Form::select('motor', config('options.motor'), null, ['class' => 'uniformselect', 'placeholder' => 'Seleccione']); !!}
    </span>
</p>
<p>
    {!! Form::label('daily_price', 'Precio Diario'); !!}
    <span class="field">
        $ {!! Form::text('daily_price', $value = null, ['class' => 'input-small']); !!}
    </span>
</p>
<p>
    {!! Form::label('weekly_price', 'Precio Semanal'); !!}
    <span class="field">
       $  {!! Form::text('weekly_price', $value = null, ['class' => 'input-small']); !!}
    </span>
</p>
<p>
    {!! Form::label('monthly_price', 'Precio Mensual'); !!}
    <span class="field">
        $ {!! Form::text('monthly_price', $value = null, ['class' => 'input-small']); !!}
    </span>
</p>
<p>
    {!! Form::label('costo_adquisicion', 'Costo de Adquisicion'); !!}
    <span class="field">
        $ {!! Form::text('costo_adquisicion', $value =  null, ['class' => 'input-small']); !!}
    </span>
</p>
<p>
    {!! Form::label('sale_price', 'Precio de Venta'); !!}
    <span class="field">
        $ {!! Form::text('sale_price', $value = null, ['class' => 'input-small']); !!}
    </span>
</p>