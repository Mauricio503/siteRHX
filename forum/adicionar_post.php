<?php
session_start();
include('verifica_login.php');
include("funcoes.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>RHX</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

</head>
<body>
<div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title"><a href="../index.php"><img src="../img/Logo.png" style="width: 350px;"/></a></h1>
                    <hr />
                  </div>
              </div> 
             </div>
             </div>

<div class="col-sm-1" style="float: right;">
	<div class="col-sm-4">
		<h3><a href="logout.php">Sair</a></h3>
	</div>
</div>
<br>
<?php 

	if(isset($_GET['id'])){
		$id = "$_GET[id]";
	}
	if(isset($_GET['idT'])){
		$idT = "$_GET[idT]";
	}
?>
<div class="main-login main-center">
	<form class="form-horizontal" method="post" action="adiciona_post.php">
		<input type="hidden" name="idTopico" value="<?=$id?>">
		<input type="hidden" name="emailUsuario" value="<?=$_SESSION['email'];?>">
		<input type="hidden" name="idTema" value="<?=$idT?>">
		<div class="col-sm-8">
			<div class="col-sm-4">
				<label>Titulo:</label>
			</div>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="titulo" id="titulo"/>
			</div>
		</div>

    <script src="../ckeditor/ckeditor.js"></script>
	<div class="col-sm-12">
		<label for="descricao">Descrição</label>
	</div>
	<div id="dvCentro" class="col-sm-12">
            <textarea id="txtArtigo" name="descricao"></textarea>
        </div>
        <script>
                CKEDITOR.replace( 'txtArtigo' );
        </script>
</script>
	
</div>
	<button type="submit" class="btn btn-primary btn-sm">Criar</button>
	</form>
		<a type="button" class="btn btn-light btn-sm" href="posts.php?id=<?=$id?>&idT=<?=$idT?>">Voltar</a>
	</form>
</div>
</body>
</html>