<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_set_cookie_params(1900);
session_start();


function verificaLogin(){
    if ($_SESSION['logado'] != true){
        header('Location: login.php');
    }
}

function carregaimg($usuario){
    $con = connect(); 
    $sql = "SELECT * from usuarios where usuario = '$usuario'";
    $query = mysqli_query($con, $sql);
    $consulta= mysqli_fetch_array($query, MYSQLI_ASSOC);
    if ($consulta['img'] == null) {
        $_SESSION['img'] = "images/user/profile.png";
        return false;
    }else{
        $_SESSION['img'] = $consulta['img'];
        return true;
    }
}

function salvarimg($caminho,$usuario){
    $con = connect();
    $sql = "UPDATE `usuarios` SET `img`='$caminho' WHERE '$usuario' = usuario";
    $query = mysqli_query($con, $sql);
    if(!$query){
        return false;
    }
    return true;
}

function connect(){
    $con = mysqli_connect("localhost", "root", "", "portfolio");
    mysqli_set_charset($con, 'utf8');
    if(!$con){
        echo "Não foi possível se conectar!.  ".mysqli_connect_error();
    }
    return $con;
    mysqli_close ( $con );
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

function cadastrar($usuario, $senha){
    $con = connect();
    $sql = "SELECT * from usuarios where usuario = '$usuario'";
    $query = mysqli_query($con, $sql);
    $consulta= mysqli_fetch_array($query, MYSQLI_ASSOC);
    if (count($consulta) > 0){
        return false;
    }
    $sql = "INSERT INTO usuarios ( usuario , senha ) VALUES ( '$usuario' , '$senha' )";
    $query = mysqli_query($con, $sql);
    return true;
}

//Alteração da senha
function update($usuario, $senha){
    $con = connect();
    $sql = "UPDATE `usuarios` SET `senha`='$senha' WHERE '$usuario' = usuario";
    $query = mysqli_query($con, $sql);
    if(!$query){
        return false;
    }else {
        return true;
    }
}

function encerrar($act){
    if($act == "logout"){
        session_destroy();
        header ("location: index.php");
    }
}


?>