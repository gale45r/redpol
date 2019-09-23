<?php
//session_start();
if (isset($_SESSION['prue']))
{
?>

<div class="menu">
    <ul>							
        <li><a href="../controller/agregarCategorias_controller.php">Agregar Categorias</a></li>
        <li><a href="#">Ver Carrito</a></li>
        <li> <a href="#">Iniciar Sesi&oacute;n</a></li>
        <li><a href="#">Registrarse</a></li>	
    </ul>
</div>

<?php
}
?>
        