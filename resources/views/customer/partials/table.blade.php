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
        <tr data-id="{{ $customer->id }}">
            <td colspan="14" style="padding-left: 10px; font-weight: bold;">
                <a href="{{ url("customers/file/$customer->id") }}">Archivos Adjuntos</a>&nbsp;&nbsp;
                <a href=" {{ route('customers.edit', $customer) }}">Editar</a>&nbsp;&nbsp;
                <a class="btn-delete" href="#!">Eliminar</a>&nbsp;&nbsp;
            </td>
        </tr>
    @endforeach
</table>