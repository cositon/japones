
	function confirmarBaja(){
		var mensaje = 'Si pulsa "Aceptar", se eliminará el producto seleccionado';

		if(confirm(mensaje)){
			return true;
		}
 /****El RETURN corta la ejecucion de todo el codigo entonces lo que esta debajo solo se ejecutara si el confirm es FALSE****/
	
	//Redireccionamiento
		window.location ='adminProductos.php'; //redirecciona a la pagina
		return false; // retorna al formulario el valor de false y no se ejecuta el envio del formulario
	}
