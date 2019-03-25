<?php	

	/*********CONEXION A LA BASE DE DATOS**************/
	 require 'conexion.php';
    $sql = "SELECT idMarca, mkNombre, kanji 
              FROM marcas";

    $resultado= mysqli_query($link,$sql) 

            or die(mysqli_error($link)); 
    mysqli_close($link);
		/*********FIN DE LA CONEXION A LA BASE DE DATOS**************/
    include "header.php";
?>
<section id="page">
		<h1>Panel de administracion de Marcas</h1>

		<table class="table table-striped table-hover table-bordered">
			<thead class="table-success">
				<tr>
					<th>id</th>
					<th>Hiragana</th>
					<th>Kanji</th>
					<th colspan="2"><a href="formAgregarMarca.php"><img src="images/add.png" alt="Agregar"></a></th>
				</tr>
			</thead>
			<tbody>
				
				<?php
                /****************BUCLE*******************/
                    while($fila=mysqli_fetch_assoc($resultado)){  
                ?>
                    <tr>
                        <td><?php echo $fila['idMarca'];?></td>
                        <td><?php echo $fila['mkNombre'];?></td>
                        <td><?php echo $fila['kanji'];?></td>
                        <td><img src="images/editar.png" alt="Editar"></td>
					<td><img src="images/eliminar.png" alt="Eliminar"></td>
                        
                    </tr>
                 <?php
                 }
                 /****************BUCLE*******************/
                 
                 ?>

			</tbody>
			
		</table>	

</section>
<?php include "footer.php"; ?>