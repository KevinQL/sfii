<?php
class Conexion{

    public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=sfi","root","cardenas");
        return $link;

    }

}
