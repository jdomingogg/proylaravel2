<html>
<body>
 
     <p><i>Nombre Curso: </i> {{ $cu['Nombre_Curso'] }}</p>
     <p><i><a href="{{route('tutor.show', $cu['DNI_Tutor'])}}">DNI Tutor: </i> {{ $cu['DNI_Tutor'] }}</a></p>
     <h2>Alumnos</h2>
     @foreach ($cu->alumnos as $uno)
    <p>Nombre alumno: {{$uno['Nombre']}} {{$uno['Apellidos']}}</p>
    <p>DNI alumno: {{$uno['DNI']}}</p>
    <p>___________________________</p>
    <br>
     
     @endforeach
     <a href="{{ route('alumno.store') }}">Volver</a>
</body>
<html>
