<?php
	
	$mkNombre=$_POST['mkNombre'];
	$kanji=$_POST['kanji'];

	require 'conexion.php';
	/* 
	OPCION1
		INSERT INTO tabla 
			(nCampo2, nCampo5, nCampo7) *******n=nombre de
	        VALUES
			(vCampo2, vCampo5, vCampo7) *************v= valor de  
	OPCION 2
		 INSERT INTO tabla 
	        VALUES
			(vCampo1, vCampo2, vCampo3..... vCampoN)*/
	if(($mkNombre!="")&&($mkNombre!="")){
					$sql= "INSERT INTO marcas (mkNombre, kanji) VALUES ('".$mkNombre."','".$kanji."')"; //Prestar atencion a las COMILLAS


    mysqli_query($link,$sql) //es BOOLEANO
	or die(mysqli_error($link)); 

	$chequeo= mysqli_affected_rows($link); //Devuelve un NUMERO

    mysqli_close($link);

			}
	

	include "header.php";


?>
<section id="page">
		<h1>Alta de una nueva marca</h1>


		<?php

			if ($chequeo==1){
			
		?>

		<h2>Se ha agregado una nueva marca</h2>
		<h3>Kanji: <?php echo $kanji?></h3>
		<h3>Hiragana: <?php echo $mkNombre?></h3>
		
		<a href="adminMarcas.php"><button type="button" class="btn btn-info">Volver a admin Marcas</button></a>
		<a href="formAgregarMarca.php"><button type="button" class="btn btn-info">Agregar otra Marca</button></a>
	<?php
	}	else {
		?>


<section id="page">
		<h1>Alta de una nueva marca denegada</h1>
		<h2>No se ha podido agregar una nueva marca</h2>
		
		<a href="adminMarcas.php"><button type="button" class="btn btn-info">Volver a admin Marcas</button></a>
		<a href="formAgregarMarca.php"><button type="button" class="btn btn-info">Agregar otra marca</button></a>
		</section>
	<?php
	} 

	?>

</section>
<?php include "footer.php"; ?>
<script type="text/javascript">
	
	document.addEventListener("keydown", event => {
  if (event.keyCode === 13) {
  	 location.href='formAgregarMarca.php';
   
  }

});

</script>