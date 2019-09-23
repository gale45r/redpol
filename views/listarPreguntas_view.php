<h1> Publicaciones</h1>
        <table id= "inside">
            <tr>  
            <th>  ID PUBLICACION </th>
            <th>  TEXTO</th>
            <th>  CATEGORIA</th>
            <th>  LIKES</th>
            <th>
                <a href="../controller/altaPublicacion_controller.php" >
                    <img src="../img/agg.png" title="Agregar nuevo Item" style="width: 15px;height: 15px;">
                </a>
            </th>
    
            </tr>
            <?php
        foreach ($productos as $prod)
        {//var_dump($prod);?>
        <tr>
            <td class='boton'><?php echo $prod[0] ?></td>
            <td class='boton'><?php echo $prod[1] ?></td>
            <td class='boton'><?php echo $prod[2] ?></td>
            <td class='boton'><?php echo $prod[3] ?></td>
            <td class='boton'>
                <a href="../controller/productoABM_controller.php?opcion=editar&id=<?php echo $prod[0]; ?>">
                    <img class='boton' src='../img/edit.png' title="Modificar Item" style="width: 25px;height: 29px;"/>
                </a>
            </td>                  
            <td>
                <a href="../controller/productoABM_controller.php?opcion=eliminar&id=<?php echo $prod[0]; ?>" >
                    <img src="../img/delete.png" title="Eliminar Item" style="width: 15px;height: 19px;">
                </a>
            </td>               
        </tr>
        <?php } ?>
        </table>
        </div>