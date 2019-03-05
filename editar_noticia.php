<?php 
	include('funcoes.php');
	$id = $_GET['id'];
	$dados = busca_noticia($id);
?>

<form action="categoria.php?acao=editar" method="POST">
	<div class="form-group col-xs-6">
		<label for="id">Id</label>
		<input type="text" readonly="readonly" id="id" name="id" class="form-control" value="<?=$dados['id'];?>">
	</div>
	<div class="form-group col-xs-6">
		<label for="titulo">Titulo</label>
		<input type="text" id="titulo" name="titulo" class="form-control">
	</div>
	<div class="form-group col-xs-12">
		<label for="descricao">Descrição</label>
		<textarea name="descricao" class="form-control"></textarea>
	</div>
	<hr>
	<div class="col-xs-12">
		<input type="submit" class="btn btn-primary" value="Salvar">

		<input type="resset" class="btn btn-default" value="Cancelar">
		<a href="categoria.php?acao=excluir&id=<?=$dados['id']?>" class="btn btn-danger">Excluir</a>
	</div>	
</form>