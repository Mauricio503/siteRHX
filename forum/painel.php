<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
session_start();
include('verifica_login.php');
include('funcoes.php');
?>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<br>
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

<div class="table-reponsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="well">
				<th style="text-align: left;width: 60%;">Tema</th>
				<th>Tópicos</th>
				<th>Ultima Atualização</th>
			</tr>								
		</thead>
		<tbody>
		<?php 
            $resultado = temas();
    		foreach ($resultado as $result) {?>
			<tr>
				<td align="left"><a type="button" href="topico.php?id=<?=$result['id'];?>"><?php echo $result['nome'] ?></a>
					<br>
					<p>fd</p>
				</td>
				<td></td>
				<td></td>
			</tr>
		<?php } ?>	
		</tbody>
	</table>
</div>

</body>
</html>