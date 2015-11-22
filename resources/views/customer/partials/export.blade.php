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
    @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->contact }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->address_complete }}</td>
        </tr>
    @endforeach
</table>