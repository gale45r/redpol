<h1> Respuestas</h1>
        <table id= "inside">
            <tr>  
            <th>  ID </th>
            <th>  Respuesta</th>
           
            <th>  Fecha/hora</th>
    
            </tr>
            <?php
        foreach ($producto as $prod)
        {//var_dump($prod);?>
        <tr>
            <td class='boton'><?php echo $prod[0] ?></td>
            <td class='boton'><?php echo $prod[1] ?></td>
            
            <td class='boton'><?php echo $prod[6] ?></td>
            <td class='boton'>
                <a href="../controller/publicacionesABM_controller.php?opcion=likeR&id=<?php echo $prod[0]; ?>">
                    <img class='boton' src='../img/edit.png' title="like" style="width: 25px;height: 29px;"/>
                </a>
            </td> 
            <td class='boton'>
                <a href="../controller/publicacionesABM_controller.php?opcion=dislikeR&id=<?php echo $prod[0]; ?>">
                    <img class='boton' src='../img/edit.png' title="dislike" style="width: 25px;height: 29px;"/>
                </a>
            </td>    
        </tr>
        <?php } ?>
        </table>
        </div>