<?php
//INSERT INTO `creativos` (`id`, `nombre`, `apellido`, `direccion`, `contacto`, `area de trabajo`) VALUES (NULL, '', '', '', '', 'Diseño');

include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

print_r($_POST);
?>