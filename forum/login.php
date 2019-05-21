<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
  
    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHX</title>
  </head>
  <body>
    <div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title"><a href="../index.php"><img src="../img/Logo.png" style="width: 350px;"/></a></h1>
                    <hr />
                  </div>
              </div> 
              <?php 
      if(isset($_SESSION['nao_autenticado'])):
    ?>
      <div class="notification is-danger col-sm-12 col-sm-push-5">
        <p>Usuario ou senha inválidos</p>
      </div>
    <?php
      endif;
      unset($_SESSION['nao_autenticado']);
    ?>
        <div class="main-login main-center">
          <form class="form-horizontal" method="post" action="validacao.php">
            <div class="form-group">
              <div class="col-sm-push-3 col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Email"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-push-3 col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="senha" id="senha"  placeholder="Senha"/>
                </div>
              </div>
            </div>

            <div class="form-group col-sm-push-5 col-sm-2">
              <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
              <br>
               <a href="registrar.php" style="margin-left: 35%;">Criar Conta</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  </body>
</html>