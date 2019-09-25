<div id="formulario">
	<form method="post" action="../controller/controlPublicacion_controller.php">
		<fieldset id="centrar"> 
		<legend> Ingrese los Datos </legend>
				<label for="texto" >Pregunta:</label>
				<input class="inputText" type="text" name="texto" id="texto" />

				<label for="texto" >Descripcion:</label>
				<input class="inputText" type="text" name="descripcion" id="descripcion" />
				
				<label for="categoria">Categoria:</label>
				<select id="id_categoria" name="id_categoria">
                <?php 
                foreach ($categorias as $cate){ ?>
                    <option value="<?php echo $cate[0]; ?>"><?php echo $cate[1]; ?></option> 
                <?php } ?>
                
                </select> 
				
				
		</fieldset>
		<label id="tipoLetra"> * Todos los campos son obligatorios. </label>
		<div id="centrarBoton">	
			<input type='submit' value='Agregar'>
			<input type='reset' value='Limpiar'/>
		</div>

	</form>
</div>