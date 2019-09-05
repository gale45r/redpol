<div id="formulario">
    <form method="post" action="../controller/productoABM_controller.php?opcion=guardar&id=<?php echo $producto[0]; ?>">
		<fieldset id="centrar"> 
			<legend> Modifiqué los Datos  del Producto con ID:<?php echo $producto[0]; ?> </legend>
				<label for="nombre" >Nombre:</label>
				<input class="inputText" type="text" name="nombre" id="nombre" value="<?php echo $producto[1]; ?>"/>
				<label for="descripcion" >Descripci&oacute;n:</label>
				<textarea name="descripcion" id="descripcion" ><?php echo $producto[2]; ?></textarea> 
				<label for="precio" >Precio:</label>
				<input class="inputText" type="number" name="precio" id="precio" value="<?php echo $producto[3]; ?>"/>
				
		</fieldset>
		<div id="centrarBoton">	
			<input type='submit' value='Guardar'>
			<input type='reset' value='Limpiar'/>
		</div>
	</form>
</div>