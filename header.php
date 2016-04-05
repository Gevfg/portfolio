<!DOCTYPE html>
<?php
$nome = "login";
?>

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
    
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 text-left">
                    <a class="user" href="" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-user"></i ><span class="oculto"> <?php echo $nome ?></span></a>
                </div>
                <div class="col-xs-10">
                    <ul class="list-inline text-right">
                            <li>
                                <a class="social" href="https://www.facebook.com/geverson.gislon" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="social" href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="social" href="#" ><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="social" href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a class="social" href="#"><i class="fa fa-youtube-play"></i></a>
                            </li>
                        </ul>
                </div>
                
            </div>
        </div>
    </div>
      
    <!-- Navigation -->
    <div class="navbar navbar-gevf navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="destaque">  </span> GEVERSON <span class="destaque">></span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.html#header"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#sobre">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#portfolio">Portfólio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#contact">Contato</a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </div>


<!-- Modal -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Minha Conta</h4>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">logar</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Cadastrar</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <form style="margin-top:10px;" action="login.php" method="post">
                                <div class="form-group">
                                    <label class="logar" for="exampleInputEmail1">Email </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="nome" placeholder="nome">
                                </div>
                                <div class="form-group">
                                    <label class="logar" for="exampleInputPassword1">Senha</label>
                                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-logar">Logar</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                        <p>Aguardando...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
