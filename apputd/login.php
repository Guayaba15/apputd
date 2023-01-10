<?php
  session_start();

  if (isset($_SESSION))
  {
      session_destroy();
  }

  if ($_SERVER["REQUEST_METHOD"]=="POST")
  {
     $us=$_POST['nombre'];//nombres de las cajas de texto
     $ps=$_POST['pass'];

     include_once('conectar_utd.php');

     $consulta="select username,password,privilegios from usuarios where username='$us' and password='$ps'";

     $resultado=$con->query($consulta);

     if ($resultado->num_rows > 0)
     {
         while ($fila=$resultado->fetch_assoc())
         {
             $priv=$fila['privilegios'];
             

             session_start();
             $_SESSION['user']=$us;
             $_SESSION['pass']=$ps;
             $_SESSION['priv']=$priv;
             

             //Entre al menu de opciones 
            // echo "Usuario y contraseña correctas -Bienvenido al sistema-";

            if ($priv=="admin"){
               echo "<script>
                   window.alert('-Bienvenido-$us');
                   location.href='menu.php';
                 </script>";

            }

            elseif ($priv=="estandar") {
             echo "<script>
                   window.alert('-Bienvenido-$us');
                   location.href='menu.php';
                 </script>";
            }

           else {
               echo "<script>
                   window.alert('-Bienvenido-$us');
                   location.href='menu.php';
                 </script>";
           }

         }
     }
     else
     {
         //echo "Usuario y contraseña incorrectas por favor verifique ...";
        echo "<script>
                window.alert('Usuario y contraseña incorrectas');
                location.href='login.php';
              </script>";
     }

  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>LOGIN DE ACCESO</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
   
  </head>
  <body>
  <div class="fondo">  
    <div class="login">
      <h4>ACCESO AL SISTEMA</h4>
      <img src="img/user.png" alt="Error al cargar la imagen :(">
      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table>
              <tr>
                <td>
                  <input type="text"   placeholder="Usuario" name="nombre" required >
                </td>
              </tr>
              <tr>
                <td>
                <input type="password"  placeholder="Contraseña" name="pass" required>
                </td>
              </tr>  
             <tr>
               <td colspan="2">
                   <input type="submit" name="enviar" value="Enviar" >
                   <input type="reset" name="borrar" value="Borrar" >
                </td>
             </tr>
          </table>
      </form>
     </div>
    </div>
  </body>
</html>







