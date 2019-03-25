<?php
	include "header.php";
?>
<section>
		<h1>Formulario para agregar una nueva marca</h1>
		<form action="agregarMarca.php" method="post">
			<label for="kanji">Kanji</label>
			<input type="text" name="kanji" class="form-control" id="kanji" autofocus>
			<br>
			<label for="mkNombre">Hiragana</label>
			<input type="text" name="mkNombre" class="form-control" id="hiragana">
			<br>
			
			
			
			<input type="submit" value="Agergar Categoría" class="btn btn-success" id="enviar">
			<a href="adminMarcas.php"><button type="button" class="btn btn-success">Volver a admin Marcas</button></a>
		</form>


</section>
<?php include "footer.php"; ?>
<script type="text/javascript">
	
	document.getElementById("enviar").addEventListener("click", envio);

	function envio(e){
		var kanji=document.getElementById("kanji").value;
		var hiragana=document.getElementById("hiragana").value;
		if((kanji=="")||(hiragana=="")){
			e.preventDefault();
		}
		

	}

	


</script>