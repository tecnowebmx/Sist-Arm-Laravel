<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<table width="100%" class="table table-bordered">
<tr>
    <th>Nombre Completo</th>
    <th>Clave</th>
    <th>Teléfono</th>
    <th>Email</th>
    <th>Fecha de Ingreso</th>
    <th>Acciones</th>
</tr>
    @foreach($sellers as $seller)
        <tr data-id="{{ $seller->id }}">
            <td>{{ $seller->full_name }}</td>
            <td>{{ $seller->key }}</td>
            <td>{{ $seller->phone }}</td>
            <td>{{ $seller->email }}</td>
            <td>{{ date('d-m-Y', strtotime($seller->fecha_ingreso)) }}</td>
    </tr>
    @endforeach
</table>