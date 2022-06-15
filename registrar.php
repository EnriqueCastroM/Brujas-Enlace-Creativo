<?php
$nombre = isset($_POST['txt_nombre']) ? $_POST['txt_nombre'] : '';
$apellido = isset($_POST['txt_apellido']) ? $_POST['txt_apellido'] : '';
$direccion = isset($_POST['txt_direccion']) ? $_POST['txt_direccion'] : '';
$contacto = isset($_POST['n_contacto']) ? $_POST['n_contacto'] : '';
$trabajo = isset($_POST['op_areatrabajo']) ? $_POST['op_areatrabajo'] : '';

try{

$conexion = new PDO('mysql:host=localhost;port=3306;dbname=brujasclientes', 'root', '');
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$pdo = $conexion->prepare('INSERT INTO clientes(nombre, apellido, direccion, contacto, trabajo) VALUES(?,?,?,?,?,?)')
$pdo->bindParam(1, $nombre);
$pdo->bindParam(2, $apellido);
$pdo->bindParam(3, $nombre);
$pdo->bindParam(4, $direccion);
$pdo->bindParam(5, $contacto);
$pdo->bindParam(6, $trabajo);
$pdo->execute() or die(print($pdo->errorInfo()));

echo jason_encode('true');

}catch(PDOException $error){
    echo $error -> getMessage();
    die();
}
?>