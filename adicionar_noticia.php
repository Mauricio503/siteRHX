<?php 
$menu = "noticia";
session_start();
include('verifica_login.php');
include("funcoes.php");	
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<form action="noticia.php?acao=inserir" method="post">
	<div class="form-group col-xs-6">
		<label for="titulo">Titulo</label>
		<input type="text" id="titulo" name="titulo" class="form-control">
	</div>
	<div class="form-group col-xs-12">
		<label for="descricao">Descrição</label>
		<textarea name="descricao" class="form-control"></textarea>
	</div>
	<div class="form-group col-xs-12">
		<label for="imagem">Url Imagem</label>
		<input type="text" id="imagem" name="imagem" class="form-control">
	</div>

	<div class="col-xs-12">
		<input type="submit" class="btn btn-primary" value="Salvar">

		<input type="reset" onClick="history.go(-1)" class="btn btn-default" value="Cancelar">
	</div>	
</form>