<?php
include_once("conectar_utd.php");

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $email=$_POST['email'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];

    $consulta="insert into contactos set nombre='$nombre',apellidos='$apellidos', direccion='$direccion', telefono='$telefono', email='$email'";

    $resultado=mysqli_query($con,$consulta);

    if ($resultado){
        echo "<script>
                 alert('Registro Insertado');
                 location.href='contactos.php';
             </script>";
    }
    else{
         echo "<script>
                 alert('Acción Fallida');
                 location.href='contactos.php';
               </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Contactos</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	
		<h2 align="center">Agregar nuevo "Contacto"</h2>
          <hr>
		  <form method="post" action="">
            <table align="center">
                <tr>
                    <td><label>Nombre:</label></td>
                    <td><input type="text"  placeholder="Nombre" name="nombre" required></td>
                </tr>
                <tr>
                    <td><label>Apellidos:</label></td>
                    <td><input type="text"  placeholder="Apellidos" name="apellidos" required></td>
                </tr> 
            <tr>
                <td><label>Email:</label></td>
                <td><input type="text"  placeholder="Email" name="email" required></td>
            </tr>
            <tr>
                <td><label>Direccion:</label></td>
                <td><input type="text"  placeholder="Direccion" name="direccion" required></td>
              </tr>
              <tr>
                <td><label>Telefono:</label></td>
                <td><input type="text"  placeholder="Telefono" name="telefono" required></td>
              </tr>
              <tr>
                <td><input type="submit"  value="Enviar"></td>
                <td><input type="reset"  value="Borrar"></td>
              </tr>
            </table>
          </form>
    <hr>
</body>
</html>

