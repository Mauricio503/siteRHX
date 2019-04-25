<?php 
	include("conexao.php");

	if(isset($_POST['nomeCompleto'])){
		$nomeCompleto = $_POST['nomeCompleto'];
	}

	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}
	if(isset($_POST['senha'])){
		$senha = $_POST['senha'];
	}
	if(isset($_POST['confirmacaoSenha'])){
		$confirmacaoSenha = $_POST['confirmacaoSenha'];
	}

	if ($senha != $confirmacaoSenha){
		header('Location: /registrar.php');
	}

	if ($senha == $confirmacaoSenha){ 
		$sql ="insert into usuario (nomeCompleto,email,senha) values('$nomeCompleto','$email',md5('{$senha}'))";
		$resultado = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
		echo '<div class="alert alert-success">adicionado com sucesso</div>';
	}	
?>
<a href="login.php" class="btn-link"> Voltar</a>