<?php 
	include("conexao.php");

	if(isset($_POST['titulo'])){
		$titulo = $_POST['titulo'];
	}

	if(isset($_POST['descricao'])){
		$descricao = $_POST['descricao'];
	}

	if(isset($_POST['idTopico'])){
		$idTopico = $_POST['idTopico'];
	}

	if(isset($_POST['emailUsuario'])){
		$emailUsuario = $_POST['emailUsuario'];
	}

	if(isset($_POST['idTema'])){
		$idTema = $_POST['idTema'];
	}

	$sqlBusca = "SELECT * FROM usuario WHERE email = '$emailUsuario'";
	$resultado_usuario = mysqli_query($conexao, $sqlBusca);

	foreach ($resultado_usuario as $result) {
		$idusuario = $result['id'];
		$sql ="insert into post (titulo,descricao,idusuario,idtopico) values('$titulo','$descricao','$idusuario','$idTopico')";
		$resultado = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
	}
 	header('Location: /www/siteRHX/forum/posts.php?id='+$idTema+'&idT='+$idTopico);	
?>