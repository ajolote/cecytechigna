<?php
class ConexionBD {
    public function conexionBD(){
        $bd = new PDO("mysql:host=localhost;dbname=cecytechigna","root","");
        $bd -> setAttribute( PDO::ATTR_EMULATE_PREPARES, false);
        $bd -> exec("set names utf8");
        return $bd;
    }
}
