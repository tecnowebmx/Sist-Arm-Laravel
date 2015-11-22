<table width="100%" class="table table-bordered">
    <tr>
        <th>Tipo</th>
        <th>Usuario</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Vendedor Relacionado</th>
        <th>Status</th>
        <th>Acciones</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->type }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->salesman_id }}</td>
            <td>{{ $user->status }}</td>

            <td>
                <a href=" {{ route('users.edit', $user) }}">Editar</a>
                <a href="#">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>