<?php

    require_once 'restrito.php';

    if (count($_POST) > 0){
        $cadastro = cadastrar($_POST['login'], $_POST['senha']);
        
        if ($cadastro != true){
            $msg_erro = "Usuario já cadastrado!";
        }else {
            header('Location: login.php');
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
  <body>
  <div class="container">
  	
  
      
       <div  class="blabla">
        
       <!-- <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div> -->
            <?php if ($msg_erro != ''): ?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo $msg_erro ?></strong>
            </div>
            <?php endif ?>
           
        <form class="form-signin" action="cadastrar.php" method="post">
        <h3 class="form-signin-heading">CADASTRAR</h3>
        
    <label for="usuario" class="sr-only">usuario</label>
        
            <input type="text" id="usuario" class="form-control" placeholder="Usuario" name="login" required autofocus>
        
        
        <label for="senha" class="sr-only">Senha</label>
        <input type="password" id="senha" class="form-control" placeholder="coloque" name="senha" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">MANDA BALA</button>
      </form>
           <a href="login.php">Logar</a>
      </div> 
    
      
      
      
      
 </div> <!-- /container -->





  	<script src="js/bootstrap.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
  </body>