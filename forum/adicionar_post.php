<?php
session_start();
include('verifica_login.php');
include("funcoes.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<script type="text/javascript" src="froala_editor.min" ></script>

<!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/css/froala_style.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">RHX</h1>
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
Usuario:<?php echo $_SESSION['email'];?>
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
	<div class="col-sm-12" style="margin-top: 10px;">
    	<textarea name="descricao"></textarea>
    </div>

    <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/js/froala_editor.pkgd.min.js"></script>

    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor() }); </script>


</script>
	
</div>
	<button type="submit" class="btn btn-primary btn-sm">Criar</button>
	</form>
		<a type="button" class="btn btn-light btn-sm" href="posts.php?id=<?=$id?>&idT=<?=$idT?>">Voltar</a>
	</form>
</div>
</body>
</html>