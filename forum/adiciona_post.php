<?php 
	include("conexao.php");

	if(isset($_POST['titulo'])){
		$titulo = $_POST['titulo'];
	}

	if(isset($_POST['descricao'])){
		$descricao = $_POST['descricao'];
	}

	if(isset($_GET['id'])){
		$idTopico = $_GET['id'];
	}

	if(isset($_POST['emailUsuario'])){
		$emailUsuario = $_POST['emailUsuario'];
	}

	if(isset($_GET['idT'])){
		$idTema = $_GET['idT'];
	}

	$sqlBusca = "SELECT * FROM usuario WHERE email = '$emailUsuario'";
	$resultado_usuario = mysqli_query($conexao, $sqlBusca);

	foreach ($resultado_usuario as $result) {
		$idusuario = $result['id'];
		$sql ="insert into post (titulo,descricao,idusuario,idtopico) values('$titulo','$descricao','$idusuario','$idTopico')";
		$resultado = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
	}

	if(is_numeric($idTema) && is_numeric($idTopico)){
		$variavel = intval($idTema);
		$variavel2 = intval($idTopico);
		echo gettype($idTema);
		echo gettype($idTopico);
		echo gettype($variavel);
		echo gettype($variavel2);
 		//header("Location: /www/siteRHX/forum/posts.php?id="+$variavel+"&idT="+$variavel2);
 		header('javascript:history.back(-1);');
 	}else{
 		echo "Adicionado com Sucesso <a href='javascript:history.back(-1);'>Voltar</a>";
 	}
?>