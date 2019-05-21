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
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	include("funcoes.php");

	if(isset($_GET['id'])){
		$id = "$_GET[id]";
	}
?>

	<a type="button" class="btn btn-light btn-sm" href="painel.php">Voltar</a>


<div class="table-reponsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="well">
				<th style="text-align: left;width: 60%;">Topico</th>
				<th>Numero Post</th>
				<th><button id="topico_ativaModal"
							class="btn btn-sm btn-success" data-toggle="modal" type="button" data-target="#modalTopico">
							<span class="glyphicon glyphicon-plus" />
						</button></th>
			</tr>								
		</thead>
		<tbody>
		<?php 
            $resultado = lista_topicos($id);
    		foreach ($resultado as $result) {?>
			<tr>
				<td align="left"><h4><a type="button" href="posts.php?id=<?=$result['id'];?>&idT=<?=$id?>"><?php echo $result['nome'] ?></a> </h4>
					<br>
					<p><?php echo $result['descricao'] ?></p>
				</td>
				<td>
					<?php 	
           			 $quantidade = quantidade_post($result['id']);
            			echo $quantidade[0];
        			?>
				</td>
				<td></td>
			</tr>
		<?php } ?>	
		</tbody>
	</table>
</div>


<!-- Modal -->
<div class="modal fade" id="modalTopico" tabindex="-1" role="dialog" aria-labelledby="topicoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  	<form action="adiciona_topico.php" method="post">
    		<input type="hidden" name="idTema" value="<?=$id?>">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="topicoModalLabel">Novo Tópico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<div class="row">
      	<div class="col-sm-4">
      		<label>Titulo:</label>
      	</div>
       <div class="col-sm-8">
			<input type="text" class="form-control" name="nome" id="nome"/>
		</div>
		<div class="col-sm-4">
			<label>Descrição:</label>
		</div>
		<div class="col-sm-8" style="margin-top: 10px;">
			<textarea name="descricao" class="form-control"></textarea>
		</div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>

</body>




</html>