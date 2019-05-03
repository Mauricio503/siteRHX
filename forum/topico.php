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
				<th style="text-align: left;width: 60%;">Tema</th>
				<th>Tópicos</th>
				<th>Ultima Atualização</th>
			</tr>								
		</thead>
		<tbody>
		<?php 
            $resultado = lista_topicos($id);
    		foreach ($resultado as $result) {?>
			<tr>
				<form action="posts.php" method="post">
					<input type="hidden" name="id" value="<?=$result['id'];?>">
				<td align="left"><button type="submit"><?php echo $result['nome'] ?></button>
				</form>
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