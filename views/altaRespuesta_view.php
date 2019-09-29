<?php
//session_start();
?>
<div id="formulario">
	<form method="post" action="../controller/controlRespuesta_controller.php">
		<fieldset id="centrar"> 
		<legend> Ingrese Respuesta </legend>
				<label for="texto" >Respuesta:</label>
				<input class="inputText" type="text" name="texto" id="texto" />
		</fieldset>
		<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
		<label id="tipoLetra"> * Todos los campos son obligatorios. </label>
		<div id="centrarBoton">	
			<input type='submit' value='Agregar'>
			<input type='reset' value='Limpiar'/>
		</div>

	</form>
</div>