<!DOCTYPE html>
<html lang="en">
    <head> 
	
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<title>RHX</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">RHX</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="registro.php">
						
						<div class="form-group">
							<div class="col-sm-push-3 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nomeCompleto" id="nomeCompleto"  placeholder="Nome Completo"/>
								</div>
							</div>
						</div>

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
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nomeUsuario" id="nomeUsuario"  placeholder="Nome de usuario"/>
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

						<div class="form-group">
							<div class="col-sm-push-3 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirmacaoSenha" id="confirmacaoSenha"  placeholder="Confirmação da senha"/>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-push-5 col-sm-2">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Criar conta</button>
							<br>
							 <a href="login.php" style="margin-left: 35%;">Login</a>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>