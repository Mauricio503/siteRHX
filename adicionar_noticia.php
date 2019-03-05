<?php 
$menu = "noticia";
include("menu.php");
	
?>

<form action="noticia.php?acao=inserir" method="post">
	<div class="form-group col-xs-6">
		<label for="titulo">Titulo</label>
		<input type="text" id="titulo" name="titulo" class="form-control">
	</div>
	<div class="form-group col-xs-12">
		<label for="descricao">Descrição</label>
		<textarea name="descricao" class="form-control"></textarea>
	</div>

	<div class="col-xs-12">
		<input type="submit" class="btn btn-primary" value="Salvar">

		<input type="reset" class="btn btn-default" value="Cancelar">
	</div>	
</form>