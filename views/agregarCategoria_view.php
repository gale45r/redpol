<div id="formulario">
	<form method="post" action="../controller/controlAgregarCategoria_controller.php">
		<fieldset id="centrar"> 
		<legend> Agregar Categoria </legend>
				<label for="nombre" >Nombre:</label>
				<input class="inputText" type="text" name="nombre" id="nombre" />
				<label for="descripcion" >Descripcion:</label>
				<input class="inputText" type="text" name="descripcion" id="descripcion" />
				
		</fieldset>
		<label id="tipoLetra"> * Todos los campos son obligatorios. </label>
		<div id="centrarBoton">	
			<input type='submit' value='Agregar'>
			<input type='reset' value='Limpiar'/>
		</div>
		
	</form> 
</div>