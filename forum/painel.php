<!DOCTYPE html>
<html>
<head>
	<title>RHX</title>
	<?php
session_start();
include('verifica_login.php');
include('funcoes.php');
?>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<br>
</head>
<body>
<div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">RHX(Em construção)</h1>
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
				<th>Numero Tópicos</th>
				<th>Descrição Tópicos</th>
			</tr>								
		</thead>
		<tbody>
		<?php 
            $resultado = temas();
    		foreach ($resultado as $result) {?>
			<tr>
				<td align="left"><h4><a type="button" href="topico.php?id=<?=$result['id'];?>"><?php echo $result['nome'] ?></a></h4>
					<br>
					<p><?php echo $result['descricao'] ?></a></p>
				</td>
				<td>
					<?php 	
            $quantidade = quantidade_topico($result['id']);
            	echo $quantidade[0];
        			?>
				</td>
				<td>
					<?php 	
            $topicos = todos_topicos_tema($result['id']);
      		$indice = 0;
			foreach ($topicos as $topico) {
				if($indice < 3){
					echo $topico['nome'];
					echo "<br>";
					$indice + 1;
				} else {
					break;
				}
			}	
        	
        	?>
				</td>
			</tr>
		<?php } ?>	
		</tbody>
	</table>
</div>

</body>
</html>