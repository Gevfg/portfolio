<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();

function verificaLogin(){
    if ($_SESSION['logado'] != true){
        header('Location: login.php');
    }
}
function connect(){
    $con = mysqli_connect("localhost", "root", "", "portfolio");
    mysqli_set_charset($con, 'utf8');
    if(!$con){
        echo "Não foi possível se conectar!.  ".mysqli_connect_error();
    }
    return $con;
}
function logar($usuario, $senha){
    $con = connect();
    $sql = "SELECT * from usuarios where usuario = '$usuario' and senha = '$senha'";
    $query = mysqli_query($con, $sql);
    $usuario = mysqli_fetch_array($query, MYSQLI_ASSOC);
    if (count($usuario) > 0){
        $_SESSION['logado'] = true;
        return true;
    }else {
        return false;
    }
}

?>