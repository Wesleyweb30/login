<?php 
 class Conexao{

    public static function conexao(){
        $con = new mysqli('localhost','root','','cassino');
        if($con->error){
            die ("ERRO NA CONEXAO". $con->error);
        }
        return $con;
    }
 }
?>