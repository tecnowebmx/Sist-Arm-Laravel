<table width="100%" class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Empresa</th>
        <th>Contacto</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Dirección</th>
    </tr>
    @foreach($prospects as $prospect)
        <tr id="{{ $prospect->id }}" >
            <td>{{ $prospect->id }}</td>
            <td>{{ $prospect->name }}</td>
            <td>{{ $prospect->contact }}</td>
            <td>{{ $prospect->phone }}</td>
            <td>{{ $prospect->email }}</td>
            <td>{{ $prospect->address_complete }}</td>
        </tr>
        <tr data-id="{{ $prospect->id }}">
            <td colspan="14" style="padding-left: 10px; font-weight: bold; ">
                <a onclick="return confirm('Seguro que desea convertir este prospecto a cliente?')" href="{{ url("prospects/convertir-prospecto/$prospect->id") }}">Convertir Prospecto</a>&nbsp;&nbsp;
                <a href=" {{ route('prospects.edit', $prospect) }}">Editar</a>&nbsp;&nbsp;
                <a class="btn-delete" href="#!">Eliminar</a>&nbsp;&nbsp;
            </td>
        </tr>
    @endforeach
</table>