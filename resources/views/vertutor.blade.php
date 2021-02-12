<html>
<body>
 
     <p><i>Nombre Tutor: </i> {{ $tu['Nombre'] }} {{$tu['Apellidos']}}</p>
     <p><i>DNI: </i> {{ $tu['DNI'] }}</p>
     <p><i>Curso: </i> {{ $tu->curso['Clave_Curso'] }}</p>
     
     <a href="{{ route('alumno.store') }}">Volver</a>
</body>
<html>
