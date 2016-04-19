<?php
require_once "restrito.php";
verificaLogin();




if ($_SESSION['msg'] == true){
    $msg_erro = "Formato não suportado"; 
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
          
          <img class="perfil-big" src="<?php echo $_SESSION['img']; ?>" >
        
        <form method="post" enctype="multipart/form-data" action="img.php">
            <input name="arquivo" type="file" />
            <input class="btn btn-login" type="submit" value="Salvar" />
          </form>
          
          <a class="btn-voltar" href="usuario.php">voltar</a>
          
      </div> 
      
      
      
      
      
      
 </div> <!-- /container -->





  	<script src="js/bootstrap.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
  </body>