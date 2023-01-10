<?php
include_once("conectar_utd.php");

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $priv=$_POST['priv'];

	//$encrypt = password_hash($contraseña, PASSWORD_DEFAULT);
	//$encrypt = openssl_encrypt($contraseña);
	//$encrypt = string sha1($contraseña);
	//$encrypt = fnEncrypt($contraseña);
    $consulta="insert into usuarios set username='$usuario', password='$contraseña', privilegios='$priv'";

    $resultado=mysqli_query($con,$consulta);

    if ($resultado){
        echo "<script>
                 alert('Registro Insertado');
                 location.href='usuarios.php';
             </script>";
    }
    else{
         echo "<script>
                 alert('Acción Fallida');
                 location.href='usuarios.php';
               </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
		    <h2 align="center">Agregar nuevo "Usuario"</h2>
	        <hr>
			<form method="post" action="">
	      
	          <table align="center">
	            <tr>
	              <td><label>Usuario:</label></td>
	              <td><input type="text" placeholder="Usuario"  name="usuario" required></td>
	            </tr>
	                <tr>
	                  <td><label>Contraseña:</label></td>
	                  <td><input type="password"  placeholder="Contraseña" name="contraseña" required></td>
	                </tr>
	            <tr>
	              <td><label>Privilegio:</label></td>
	              <td>
	                <select name="priv"  required>
	                  <option value="admin">Admin</option> 
	                  <option value="estandar">Estandar</option> 
	                </select>
	              </td>
	            </tr>
	              <td><input type="submit"  value="Enviar"></td>
	              <td><input type="reset"  value="Borrar"></td>
	            </tr>
	          </table>
	          
	        </form>
	
	
	<hr>
</body>
</html>
