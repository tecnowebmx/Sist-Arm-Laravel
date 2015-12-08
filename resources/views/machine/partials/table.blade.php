<table width="100%" class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Máquina</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Serie</th>
        <th>Año del Equipo</th>
        <th>Horometro</th>
        <th>Motor</th>
        <th>Precio por Día</th>
        <th>Precio por Semana</th>
        <th>Precio por Mes</th>
        <th>Estatus</th>
        <th>Acciones</th>
    </tr>
    @foreach($machines as $machine)
        <tr data-id="{{ $machine->id }}">
            <td>{{ $machine->id }}</td>
            <td>{{ $machine->name }}</td>
            <td>{{ $machine->brand }}</td>
            <td>{{ $machine->model }}</td>
            <td>{{ $machine->series }}</td>
            <td>{{ $machine->year }}</td>
            <td>{{ $machine->horometro }}</td>
            @if($machine->motor == 1)
                <td>Electrico</td>
            @elseif($machine->motor == 2)
                <td>Diesel</td>
            @elseif($machine->motor == 3)
                <td>Gas L.P.</td>
            @endif
            <td>${{ number_format($machine->daily_price, 2) }}</td>
            <td>${{ number_format($machine->weekly_price, 2) }}</td>
            <td>${{ number_format($machine->monthly_price, 2) }}</td>
            @if($machine->availability == 1)
                <td>Disponible</td>
            @elseif($machine->availability == 2)
                <td>Rentada</td>
            @elseif($machine->availability == 3)
                <td>En Mantenimiento</td>
            @elseif($machine->availability == 4)
                <td>Vendida</td>
            @endif
            <td>
                <a href=" {{ route('machines.edit', $machine) }}">Editar</a>
                <a class="btn-delete" href="#!">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>