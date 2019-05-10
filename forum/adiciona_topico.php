<?php 
	include("conexao.php");

	if(isset($_POST['nome'])){
		$nome = $_POST['nome'];
	}

	if(isset($_POST['descricao'])){
		$descricao = $_POST['descricao'];
	}

	if(isset($_POST['idTema'])){
		$idTema = $_POST['idTema'];
	}

		$sql ="insert into topico (nome,descricao,idtema) values('$nome','$descricao','$idTema')";
		$resultado = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));

 	header('Location: /www/siteRHX/forum/topico.php?id='+$idTema);	
?>