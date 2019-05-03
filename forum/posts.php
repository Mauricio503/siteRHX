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
<?php 
	include("funcoes.php");

	if(isset($_POST['id'])){
		$id = "$_POST[id]";
	}
?>
<div class="table-reponsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="well">
				<th style="text-align: left;width: 40%;">Usuario</th>
				<th>Post</th>
				<th><a class="btn btn-xs btn-success" href="adicionar_post.php"><span class="glyphicon glyphicon-plus"> </span></a></th>
			</tr>								
		</thead>
		<tbody>
		<?php 
            $resultado = lista_posts($id);
    		foreach ($resultado as $result) {?>
			<tr>
				<?php 
            $dados = busca_usuario($result['idusuario']);?>
				<td align="left">Nome Usuario: <?php echo $dados['nomeCompleto'] ?><br>		
				</td>
				<td>Titulo: <?php echo $result['titulo'] ?><br>
					Data: <?php $newDate = date("d/m/Y", strtotime($result['data']));
					echo $newDate ?><br>
					Descrição: <?php echo $result['descricao'] ?></td>
			</tr>
		<?php } ?>	
		</tbody>
	</table>
</div>

</body>
</html>