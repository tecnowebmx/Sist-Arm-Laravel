@if ($errors->any())
    <div class="alert alert-error">
        <p>Por Favor corrige los errores:</p>
        <ul style="margin: 15px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
