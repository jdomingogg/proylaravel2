<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <p>Nuevo registro: <a href="{{ route('alumno.create') }}">ALTA</a></p>
    @if ($message = Session::get('success'))
    <!--        <div class="alert alert-success">
            <p></p>
	</div>
  <p>Creado nuevo registro con éxito</p>
-->
    <p> {{ $message }}</p>
    @endif
    <table style="width:100%">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Curso</th>
            <th>Acciones</th>
        </tr>
        @foreach ($todos as $uno)
        <tr>
            <td> {{ $uno['Nombre'] }}</td>
            <td>{{ $uno['Apellidos'] }} </td>
            <td>{{ $uno['DNI'] }} </td>
            <td><a href="{{ route('curso.show', $uno['Nombre_Curso']) }}">{{ $uno['Nombre_Curso'] }}</a> </td>
            <td>
                <form action="{{ route('alumno.destroy', $uno['id']) }}" method="POST">


                    @csrf
                    @method('DELETE')
                    <button type="submit" title="delete">eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
<html>
