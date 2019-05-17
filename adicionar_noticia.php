<?php 
session_start();
include('verifica_login.php');
include("funcoes.php");	
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>CKEditor</title>
        <meta charset="utf-8" />
    </head>
    <body>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<form action="noticia.php?acao=inserir" method="post">
	<div class="form-group col-xs-6">
		<label for="titulo">Titulo</label>
		<input type="text" id="titulo" name="titulo" class="form-control">
	</div>
	<script src="ckeditor/ckeditor.js"></script>
	<div class="col-sm-12">
		<label for="descricao">Descrição</label>
	</div>
	<div id="dvCentro" class="col-sm-12">
            <textarea id="txtArtigo" name="descricao"></textarea>
        </div>
        <script>
                CKEDITOR.replace( 'txtArtigo' );
        </script>

	<div class="form-group col-xs-12">
		<label for="imagem">Url Imagem</label>
		<input type="text" id="imagem" name="imagem" class="form-control">
	</div>

	<div class="col-xs-12">
		<input type="submit" class="btn btn-primary" value="Salvar">

		<input type="reset" onClick="history.go(-1)" class="btn btn-default" value="Cancelar">
	</div>	
</form>
</body>
</html>
     
