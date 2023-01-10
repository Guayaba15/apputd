<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Contactos</title>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<h2 align=center>Administrar "Contactos"</h2>
	<hr>
	<div >
			<table>
			  <thead>
			    <tr>
			      <th scope='col'>Id</th>
			      <th scope='col'>Nombre</th>
			      <th scope='col'>Apellidos</th>
			      <th scope='col'>Dirección</th>
			      <th scope='col'>Telefono</th>
				  <th scope='col'>E-mail</th>
				  <th scope='col'>Acciones</th>
			   </tr>
			</thead>
		    <tbody>
			<?php
                        include_once("conectar_utd.php");
                        $consulta="select * from contactos";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
                                <tr>
                                    <td class="table_data"><?php echo $fila['id'] ?></td>
                                    <td class="table_data"><?php echo $fila['nombre'] ?></td>
                                    <td class="table_data"><?php echo $fila['apellidos'] ?></td>
									<td class="table_data"><?php echo $fila['direccion'] ?></td>
									<td class="table_data"><?php echo $fila['telefono'] ?></td>
									<td class="table_data"><?php echo $fila['email'] ?></td>
                                    
                                    <td class="table_data" colspan="2" >
                                    <a class="btn_acciones" href="contactos.php?id=<?php echo $fila['id'] ?>"><span><ion-icon name="create-outline"></ion-icon></span></a>
                                    <a class="btn_acciones" href="eliminar.php?id=<?php echo $fila['id'] ?>"><span><ion-icon name="close-circle-outline"></ion-icon></span></a>
									<a class="btn_acciones" href="eliminar.php?id=<?php echo $fila['id'] ?>"><span><ion-icon name="eye-outline"></ion-icon></span></a>
									<a class="btn_acciones" href="eliminar.php?id=<?php echo $fila['id'] ?>"><span><ion-icon name="document-text-outline"></ion-icon></span></a>

                                    </td>
                               
                                </tr> 

                             <tr>
                                <?php
                            }
                        }

                    ?>
			</tbody>
			</table>
		</div>
	    <h3>Existen #<?php echo mysqli_num_rows($resultado) ?> contactos</h3>
	<hr>
</body>

</html>