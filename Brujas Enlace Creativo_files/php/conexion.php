<?php
$mysqli = new mysqli('localhost','root','','insertar');

if(&mysqli -> connect_errno){
    echo "No se ha podido conectar con el servidor MySQL debido al error:" .$mysqli->connect_error;
}