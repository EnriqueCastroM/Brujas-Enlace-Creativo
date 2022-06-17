<?php
include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

$id = isset($_POST['id'])? $_POST['id']: '';
$nombre = isset($_POST['nombre_creativo'])? $_POST['nombre_creativo']: '';
$apellido = isset($_POST['apellido_creativo'])? $_POST['apellido_creativo']: '';
$mail = isset($_POST['mail_creativo'])? $_POST['mail_creativo']: '';
$contacto = isset($_POST['contacto_creativo'])? $_POST['contacto_creativo']: '';
$adt = isset($_POST['adt'])? $_POST['adt']: '';
$accion = isset($_POST['accion'])? $_POST['accion']: '';

print_r($_POST);


if($accion!=''){

    switch($accion){

        case 'agregar' :
           $sql = $conexionBD->prepare('INSERT INTO `creativos` (`nombre`, `apellido`, `direccion`, `contacto`, `area de trabajo`) VALUES(?,?,?,?,?)');
           $sql->bindParam(1,$nombre);
           $sql->bindParam(2,$apellido);
           $sql->bindParam(3,$mail);
           $sql->bindParam(4,$contacto);
           $sql->bindParam(5,$adt);
           $sql->execute() or die(print($sql->errorInfo()));
           
        break;
        case 'editar' :
            $sql = "UPDATE creativos SET nombre='$nombre' WHERE id=$id";
            echo $sql;

        break;
        case 'borrar' :
            $sql = "DELETE FROM creativos WHERE id=$id";
            echo $sql;
        break;
    }
}

$consulta = $conexionBD->PREPARE("SELECT * FROM creativos");
$consulta->execute();
$listaCreativos=$consulta->fetchAll();



?>