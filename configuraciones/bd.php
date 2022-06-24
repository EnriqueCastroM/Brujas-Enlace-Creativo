<?php

class bd{
    public static $instancia=null;
    public static function crearInstancia(){

        if( !isset(self::$instancia)){
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            //web//
            self::$instancia = new PDO('mysql:host=localhost:3306 ;dbname=brujasen_aplicacion', 'brujasen','7!A8LEqD31pax-', $opciones);
            //local//
            //self::$instancia = new PDO('mysql:host=localhost:3306 ;dbname=aplicacion', 'root','', $opciones);
            echo "conectado...";
        }
        return self::$instancia;

    }
}

