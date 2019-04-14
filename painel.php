<?php
session_start();
include('verifica_login.php');
include("funcoes.php");
?>

<div class="col-sm-4" style="float: right;">
	<div class="col-sm-8">
		<h3>Usuario:<?php echo $_SESSION['usuario'];?></h3>
	</div>
	<div class="col-sm-4">
		<h3><a href="logout.php">Sair</a></h3>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<br>
<h2>Noticias</h2>
<div class="table-reponsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="well">
				<th style="width: 60px;">Codigo</th>
					<th style="text-align: left;">Titulo</th>
					<th style="width: 41px;"><a class="btn btn-xs btn-success" href="adicionar_noticia.php"><span class="glyphicon glyphicon-plus"> </span></a></th>
				</tr>								
		</thead>
		<tbody>
		<?php 
            $resultado = lista_noticias();
    		foreach ($resultado as $result) {?>
			<tr>
				<td><?php echo $result['id'] ?></td>
				<td align="left"><?php echo $result['titulo'] ?></td>
				<td align="right" style="width: 41px;">
					<a class="btn btn-xs btn-primary" type="button" href="editar_noticia.php?id=<?=$result['id']?>"><span class="glyphicon glyphicon-pencil"></span></a>
				</td>
			</tr>
		<?php } ?>	
		</tbody>
	</table>
</div>