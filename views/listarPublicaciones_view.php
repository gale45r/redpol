
<h1> Preguntas</h1>
        <table id= "inside">
            <tr>  
            <th>  ID </th>
            <th>  USUARIO</th>
            <th>  PREGUNTA</th>
            <th>  Descripcion</th>
            <th>  CATEGORIA</th>
            <th>  LIKES</th>
            <th>  DisLIKES</th>
            <th>  Preguntas</th>
            <th>
                <a href="../controller/publicacionAlta_controller.php" >
                    <img src="../img/agg.png" title="Agregar nueva pregunta" style="width: 15px;height: 15px;">
                </a>
            </th>
    
            </tr>
            <?php
        foreach ($publicacion as $prod)
        {//var_dump($prod);?>
        <tr>
            <td class='boton'><?php echo $prod[0] ?></td>
            <td class='boton'><?php 
            
            foreach($usuarios as $struct) {
                if ($prod[4] == $struct[0]) {
                    echo $struct[1];
                    break;
                }
            }
             ?></td>
            <td class='boton'><?php echo $prod[3] ?></td>
            <td class='boton'><?php echo $prod[6] ?></td>
            <td class='boton'><?php 
            
            foreach($categorias as $struct) {
                if ($prod[5] == $struct[0]) {
                    echo $struct[1];
                    break;
                }
            }
             ?></td>
            <td class='boton'><?php echo $prod[1] ?></td>
            <td class='boton'><?php echo $prod[2] ?></td>
            <td class='boton'>
                <a href="../controller/publicacionesABM_controller.php?opcion=agregarRespuesta&id=<?php echo $prod[0]; ?>">
                    <img class='boton' src='../img/edit.png' title="agregarRespuesta" style="width: 25px;height: 29px;"/>
                </a>
            </td> 
            <td class='boton'>
                <a href="../controller/publicacionesABM_controller.php?opcion=follower&id=<?php echo $prod[0].'&seguido='.$prod[4]; ?>">
                    <img class='boton' src='../img/edit.png' title="follower" style="width: 25px;height: 29px;"/>
                </a>
            </td>   
            <td class='boton'>
                <a href="../controller/publicacionesABM_controller.php?opcion=like&id=<?php echo $prod[0]; ?>">
                    <img class='boton' src='../img/edit.png' title="like" style="width: 25px;height: 29px;"/>
                </a>
            </td> 
            <td class='boton'>
                <a href="../controller/publicacionesABM_controller.php?opcion=dislike&id=<?php echo $prod[0]; ?>">
                    <img class='boton' src='../img/edit.png' title="dislike" style="width: 25px;height: 29px;"/>
                </a>
            </td>    
            <td class='boton'>
                <a href="../controller/publicacionesABM_controller.php?opcion=listarRespuestas&id=<?php echo $prod[0]; ?>">
                    <img class='boton' src='../img/edit.png' title="listarRespuestas" style="width: 25px;height: 29px;"/>
                </a>
            </td>             
            <td>
                <a href="../controller/publicacionesABM_controller.php?opcion=eliminarPregunta&id=<?php echo $prod[0]; ?>" >
                    <img src="../img/delete.png" title="Eliminar Pregunta" style="width: 15px;height: 19px;">
                </a>
            </td>               
        </tr>
        <?php } ?>
        </table>
        </div>

    <form method="post" action="../controller/listarPublicaciones_controller.php">
        <label for="categoria">Listar todas las preguntas de la Categoria:</label>
        <select id="id_categoria" name="id_categoria">
        <?php 
        foreach ($categorias as $cate){ ?>
        <option value="<?php echo $cate[0]; ?>"><?php echo $cate[1]; ?></option> 
        <?php } ?>
        </select>
        <input type="hidden" id="opc" name="opc" value="1">
        <input type='submit' value='Filtrar'>
    </form>

    <form method="post" action="../controller/listarPublicaciones_controller.php">
        <label for="categoria">Listar todas las preguntas relevantes de la Categoria:</label>
        <select id="id_usu" name="id_usu">
        <?php 
        foreach ($usuarios as $u){ ?>
        <option value="<?php echo $u[0]; ?>"><?php echo $u[1]; ?></option> 
        <?php } ?>
        </select>
        <select id="id_categoria" name="id_categoria">
        <?php 
        foreach ($categorias as $cate){ ?>
        <option value="<?php echo $cate[0]; ?>"><?php echo $cate[1]; ?></option> 
        <?php } ?>
        </select>
        <input type="hidden" id="opc" name="opc" value="2">
        <input type='submit' value='Filtrar'>
    </form>

    <form method="post" action="../controller/listarPublicaciones_controller.php">
        <label for="categoria">Listar todas las preguntas de un usuario:</label>
        <select id="id_usu" name="id_usu">
        <?php 
        foreach ($usuarios as $u){ ?>
        <option value="<?php echo $u[0]; ?>"><?php echo $u[1]; ?></option> 
        <?php } ?>
        </select>
        <input type="hidden" id="opc" name="opc" value="3">
        <input type='submit' value='Filtrar'>
    </form>

    <form method="post" action="../controller/listarPublicaciones_controller.php">
        <label for="categoria">Listar todas las respuestas de un usuario:</label>
        <select id="id_usu" name="id_usu">
        <?php 
        foreach ($usuarios as $u){ ?>
        <option value="<?php echo $u[0]; ?>"><?php echo $u[1]; ?></option> 
        <?php } ?>
        </select>
        <input type="hidden" id="opc" name="opc" value="4">
        <input type='submit' value='Filtrar'>
    </form>

</form>