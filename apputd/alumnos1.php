<?php


?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Alumnos</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
	
	<h2 align=center> Administrar "Alumnos"</h2>
	<hr>
		<div >
			<table class="table glass">
			  <thead>
			    <tr>
			      <th scope='col'>Matricula</th>
			      <th scope='col'>Nombre</th>
			      <th scope='col'>Especialidad</th>
			   </tr>
			  </thead>
			<tbody>
			<?php
                        include_once("conectar_utd.php");
                        $consulta="select * from alumnos";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
                                <tr>
                                    <td class="table_data"><?php echo $fila['matricula'] ?></td>
                                    <td class="table_data"><?php echo $fila['nombre'] ?></td>
                                    <td class="table_data"><?php echo $fila['especialidad'] ?></td>
                                    
                                    <td class="table_data" colspan="2" >
                                    <a class="btn_acciones" href="contactos.php?id=<?php echo $fila['id'] ?>"><span><ion-icon name="create-outline"></ion-icon></span></a>
                                    <a class="btn_acciones" href="eliminar.php?id=<?php echo $fila['id'] ?>"><span><ion-icon name="close-circle-outline"></ion-icon></span></a>
									<a class="btn_acciones" href="eliminar.php?id=<?php echo $fila['id'] ?>"><span><ion-icon name="eye-outline"></ion-icon></span></a>
									<a class="btn_acciones" href="imprimir.php?id=<?php echo $fila['id'] ?>"><span><ion-icon name="document-text-outline"></ion-icon></span></a>

                                    </td>
                               
                                </tr> 

                             <tr>
                                <?php
                            }
                        }

                    ?>
			</tbody>
			</table>
			<h3>Existen #<?php echo mysqli_num_rows($resultado) ?> contactos</h3>
		</div>
</body>
</html>
