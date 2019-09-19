<div id="formulario">
	<form method="post" action="../controller/controlIdentificacion_controller.php">
		<fieldset id="centrar"> 
		<legend> Identificarse </legend>
				<label for="nombre" >Nombre:</label>
				<input class="inputText" type="text" name="nombre" id="nombre" />
		</fieldset>
		<label id="tipoLetra"> * Todos los campos son obligatorios. </label>
		<div id="centrarBoton">	
			<input type='submit' value='Identificar'>
			<input type='reset' value='Limpiar'/>
		</div>

	</form> 
</div>