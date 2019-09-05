<div id="formulario">
	<form method="post" action="../controller/controlRegistro_controller.php">
		<fieldset id="centrar"> 
		<legend> Ingrese los Datos </legend>
				<label for="nombre" >Nombre:</label>
				<input class="inputText" type="text" name="nombre" id="nombre" />
				
				<label for="descripcion">Descripci&oacute;n:</label>
				<textarea name="descripcion">No mayor a 255 caracteres</textarea> 
				
				<label for="apellido">Precio:</label>
				<input class="inputText" type="number" name="precio" id="precio"/>
		</fieldset>
		<label id="tipoLetra"> * Todos los campos son obligatorios. </label>
		<div id="centrarBoton">	
			<input type='submit' value='Agregar'>
			<input type='reset' value='Limpiar'/>
		</div>

	</form>
</div>