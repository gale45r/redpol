<div id="formulario">
	<form method="post" action="../controller/controlRegistro_controller.php">
		<fieldset id="centrar"> 
		<legend> Registrar Usuario </legend>
				<label for="nombre" >Nombre:</label>
				<input class="inputText" type="text" name="nombre" id="nombre" />
				
				<label for="mail">Mail:</label>
				<input class="inputText" type="text" name="email" id="email" />

				<label for="nivel">Nivel:</label>
				<input class="inputText" type="number" name="nivel" id="nivel"/>
		</fieldset>
		<label id="tipoLetra"> * Todos los campos son obligatorios. </label>
		<div id="centrarBoton">	
			<input type='submit' value='Registrar'>
			<input type='reset' value='Limpiar'/>
		</div>
		
	</form> 
</div>