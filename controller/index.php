<?php
session_start();

// include "../model/categoria_model.php";
// $categorias=Categoria::verTodasLasCategorias();
// $_SESSION['categorias'] = $categorias;

$title = "Vengo de Index.php ";
$view_page="recuadro_muestra_view.php";//vista del cuerpo
include '../views/bienvenido_view.php';//vista master/layouts

?>