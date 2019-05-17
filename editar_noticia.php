<?php 
	include('funcoes.php');
	$id = $_GET['id'];
	$dados = busca_noticia($id);
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<form action="noticia.php?acao=editar" method="POST">
	<div class="form-group col-sm-6 col-xs-6">
		<label for="id">Id</label>
		<input type="text" readonly="readonly" id="id" name="id" class="form-control" value="<?=$dados['id'];?>">
	</div>
	<div class=" col-xs-6">
		<label for="titulo">Titulo</label>
		<input type="text" id="titulo" name="titulo" class="form-control" value="<?=$dados['titulo'];?>">
	</div>

	<script src="ckeditor/ckeditor.js"></script>
	<div class="col-sm-12">
		<label for="descricao">Descrição</label>
	</div>
	<div id="dvCentro" class="col-sm-12">
            <textarea id="txtArtigo" name="descricao"><?=$dados['descricao'];?></textarea>
        </div>
        <script>
                CKEDITOR.replace( 'txtArtigo' );
        </script>


	<div class="form-group col-xs-12">
		<label for="imagem">Url Imagem</label>
		<input type="text" id="imagem" name="imagem" class="form-control" value="<?=$dados['imagem'];?>">
	</div>
	<hr>
	<div class="col-xs-12">
		<input type="submit" class="btn btn-primary" value="Salvar">

		<input type="reset" onClick="history.go(-1)" class="btn btn-default" value="Cancelar">
		<a href="noticia.php?acao=excluir&idN=<?=$dados['id'];?>" class="btn btn-danger">Excluir</a>
	</div>	
</form>