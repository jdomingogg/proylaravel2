<html>
<body>
  <h2>HTML Forms</h2>

<form action="{{ route('alumno.store') }}" method="POST">
  @csrf
  <label for="fname">Nombre:</label><br>
  <input type="text" id="Nombre" name="Nombre" required><br>
  <label for="fname">Apellidos:</label><br>
  <input type="text" id="Apellidos" name="Apellidos" required><br>
  <label for="lname">DNI:</label><br>
  <input type="text" id="DNI" name="DNI" required><br><br>
  <label for="lname">Curso:</label><br>
  <input type="text" id="Nombre_Curso" name="Nombre_Curso" required><br><br>
  <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
