<?php

require_once "restrito.php";
verificalogin();

$tiposPermitidos= array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');

$arqName = $_FILES['arquivo']['name'];
$arqType = $_FILES['arquivo']['type'];

$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 

 if (array_search($arqType, $tiposPermitidos) === false) {
    $_SESSION['msg'] = true;
     header("Location:usuarioimg.php");
 }else{


$pasta = 'images/user/';

      // Pega a extensão do arquivo enviado
      $extensao = strtolower(end(explode('.', $arqName)));
      // Define o novo nome do arquivo usando um UNIX TIMESTAMP
      $nome = time() . '.' . $extensao;
      $upload = move_uploaded_file($arquivo_tmp, $pasta . $nome);

$caminhoimg = $pasta.$nome;
salvarimg($caminhoimg,$_SESSION['name']);
carregaimg($usuario);
//$_SESSION['img'] = $pasta.$nome; // salva na sessão o caminho da imagem

header("Location:usuario.php");
 }
?>
