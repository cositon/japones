<?php
/*********CONEXION A LA BASE DE DATOS**************/
	 require 'conexion.php';
    $sql = "SELECT mkNombre 
              FROM marcas";
    

    $resultado= mysqli_query($link,$sql) 

            or die(mysqli_error($link)); 
           
    mysqli_close($link);


		/*********FIN DE LA CONEXION A LA BASE DE DATOS**************/
	include "header.php";
	
?>

<section id="page" style="background-color:cornflowerblue; height: 400px; margin:2% 0; width: 100%; display: flex; justify-content: center; align-items: center;flex-direction: column">
	<div class="idiograma"  style="width: 90%;height: 300px; background: coral; display: flex; justify-content: center; align-items: center">
    <p style="font-size: 100px" id="kanji"></p>		
	</div>
	<div class="botones">
		<button id="borrar">Aprendido</button>
	<button id="next">Siguiente</button>
	</div>
	


</section>
<?php include "footer.php"; ?>

<?php
                /****************BUCLE*******************/
    while($fila=mysqli_fetch_assoc($resultado)){                  	
?>                                                   
<p class="words" style="display:none"><?php echo $fila['mkNombre'];?></p>
<?php               
    }       
                /****************BUCLE*******************/
                 
?>
<script src="js/js.js">


</script>
