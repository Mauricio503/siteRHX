<?php 
	include("conexao.php");
	$menu="noticia";

	if(isset($_POST['id'])){
		$id = "$_POST[id]";
	}

	if(isset($_POST['titulo'])){
		$titulo = "$_POST[titulo]";
	}
	if(isset($_POST['descricao'])){
		$descricao = "$_POST[descricao]";
	}

	if (isset($_GET['acao']) && ($_GET['acao'] == 'inserir')){ 
		$sql ="insert into noticia (titulo,descricao) values('$titulo','$descricao')";
		$resultado = mysqli_query($conexao,$sql) or die("Erro");
		echo '<div class="alert alert-success">adicionado com sucesso</div>';
	}

	if (isset($_GET['acao']) && ($_GET['acao'] == 'editar')){ 
		$sql ="update noticia set titulo ='$titulo', descricao = '$descricao' where id = $id";
		$resultado = mysqli_query($conexao,$sql) or die("Erro");
		echo '<div class="alert alert-success">editado com sucesso</div>';
	}

	if (isset($_GET['acao']) && ($_GET['acao'] == 'excluir')){ 
		$sql ="delete from noticia where id = $id";
		$resultado = mysqli_query($conexao,$sql) or die("Erro");
		echo '<div class="alert alert-success">excluído com sucesso</div>';
	}	
?>
<a href="/index.php" class="btn-link"> Voltar</a>