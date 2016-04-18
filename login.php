<?php

    require_once 'restrito.php';

    if (count($_POST) > 0){
        $logado = logar($_POST['login'], $_POST['senha']);
        
        if ($logado != true){
            $msg_erro = "Login e/ou senha incorreto(s), Tente Novamente!";
        }else {
            $_SESSION['name'] = $_POST['login'];
            header('Location: index.php');
        }
    }


?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTFÓLIO GEVERSON</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    

    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="fundo">
  <div class="container">
  	
      
      
      <div  class="containerlogin">
        
            <!-- <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div> -->
            <?php if ($msg_erro != ''): ?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo $msg_erro ?></strong>
            </div>
            <?php endif ?>
          
        
        <form class="form-signin" action="login.php" method="post">
        <h3 class="form-signin-heading text-center">Logar</h3>
        <label for="usuario" class="sr-only">usuario</label>
        <input type="text" id="usuario" class="form-control form" placeholder="Usuario" name="login" required autofocus>
        <label for="senha" class="sr-only">Senha</label>
        <input type="password" id="senha" class="form-control form" placeholder="Senha" name="senha" required>
            <button class="btn btn-login" type="submit">Vai!</button>
            <a class="linklogin" href="cadastrar.php">Deseja cadastrar?</a>
            </form>
        <a class="btn-voltar" href="index.php">voltar</a>
      </div> 
      
      
      
      
      
      
 </div> <!-- /container -->





  	<script src="js/bootstrap.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
  </body>