<?php

  include_once("conectar_utd.php");

  if ($_SERVER["REQUEST_METHOD"]=="POST"){
      $matricula=$_POST['matricula'];
      $nombre=$_POST['nombre'];
      $espec=$_POST['espec'];

      $consulta="insert into alumnos set nombre='$nombre',especialidad='$espec', matricula='$matricula'";

      $resultado=mysqli_query($con,$consulta);

      if ($resultado){
          echo "<script>
                   alert('Registro Insertado');
                   location.href='alumnos.php';
               </script>";
      }
      else{
           echo "<script>
                   alert('Error fatal');
                   location.href='alumnos.php';
                 </script>";
      }
  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Alumnos</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<!-- Aqui empieza Nuevo -->
	<h2 align="center">Agregar nuevo "Alumno"</h2>

	<hr>
	<div >
	     <form method="post" action="">
            <table align="center">
              <tr>
                <td><label>Matricula:</label></td>
                <td><input type="text" class="form-control" placeholder="Matricula" name="matricula" required></td>
              </tr>
            <tr>
                  <td><label>Nombre:</label></td>
                  <td><input type="text" class="form-control" placeholder="Nombre" name="nombre" required></td>
                </tr>
              </div>
              <div class="form-group">
                <tr>
                  <td><label>Especialidad:  </label></td>
                  <td><input type="text" class="form-control" placeholder="Especialidad" name="espec" required></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn btn-primary" value="Enviar"></td>
                    <td><input type="reset" class="btn btn-outline-primary" value="Borrar"></td>
                </tr>
            </table>
            <input type="hidden" name="tab" value="a">
            <a href="alumnos1.php"> Visualizar </a>
          </form>
		</div>
	<hr>
</body>
</html>


