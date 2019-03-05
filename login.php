<!DOCTYPE html>
<html>
<head>
  <title>RHX</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <form action="validacao.php" method="post">
  <fieldset>
  <legend style="text-align: center;">Dados de Login</legend>
    <div class="col-sm-4 col-sm-push-4">
      <div class="col-sm-12">
        <div class="col-sm-4">
          <label for="txUsuario">Usuário:</label>
        </div>
        <div class="col-sm-8">
          <input class="form-control" type="text" name="usuario" id="txUsuario" maxlength="25" />
        </div>
      </div>
      <div class="col-sm-12">
        <div class="col-sm-4">
          <label for="txSenha">Senha:</label>
        </div>
        <div class="col-sm-8">
          <input class="form-control" type="password" name="senha" id="txSenha" />
        </div>
      </div>
      <input class="form-control" style="width: 90px; margin-top: 10px;" type="submit" value="Entrar" />
    </div>
  </fieldset>
  </form>
</body>
</html>