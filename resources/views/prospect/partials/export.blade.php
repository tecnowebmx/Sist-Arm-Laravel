<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
        <tr>
            <td>{{ $prospect->id }}</td>
            <td>{{ $prospect->name }}</td>
            <td>{{ $prospect->contact }}</td>
            <td>{{ $prospect->phone }}</td>
            <td>{{ $prospect->email }}</td>
            <td>{{ $prospect->address_complete }}</td>
        </tr>
    @endforeach
</table>