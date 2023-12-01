<?php 
include'Conexao.php';


    if((isset($_POST['email'])) OR (isset($_POST['password'])))
    {

        if(strlen($_POST['email']) == 0 )
        {
            return 'Digite seu email'; 
        } 
        else if (strlen($_POST['password']) == 0 )
        {
            return 'Digite sua senha';
        }
        else
        {   
            $con = new Conexao();

            $email = $con::conexao()->real_escape_string($_POST['email']);
            $password = $con::conexao()->real_escape_string($_POST['password']);

            $query = "SELECT * FROM pessoa WHERE email = '$email'  AND senha = '$password'";
            $result = $con::conexao()->query($query) or die('erro----'.  $con::conexao()->error);

            $quantidade = $result->num_rows;

            if($quantidade == 1 ){

                $usuario = $result->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }
                
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['email'] = $usuario['email'];

                header("Location: perfil.php");

            }

        }

    }
?>