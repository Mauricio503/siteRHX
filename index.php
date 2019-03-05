<!DOCTYPE html>
<html>
<head>
	<title>RHX</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<?php 
	include("menu.php");
	include("funcoes.php")
	?>
	<div class="col-sm-3" id="botao_oQueE" onclick="ativarDesativarConteudo('botao_oQueE')" style="background: green;border-radius: 100px 100px 0 0;">
		<label class="col-sm-6 col-sm-push-4" style="color: #eee">O que é?</label>
	</div>
	<div class="col-sm-3" id="botao_tratamento" onclick="ativarDesativarConteudo('botao_tratamento')" style="background: red;border-radius: 100px 100px 0 0;">
		<label class="col-sm-6 col-sm-push-4" style="color: #eee">Tratamento</label>
	</div>
	<div class="col-sm-3" onclick="ativarDesativarConteudo('botao_objetivos')" id="botao_objetivos" style="background: black;border-radius: 100px 100px 0 0;">
		<label class="col-sm-6 col-sm-push-4" style="color: #eee">Objetivos</label>
	</div>
	<div class="col-sm-12" id="conteudo_oQueE" style="background: green;">
		<p style="color: #eee">O <b>Raquitismo Hipofosfatemico ligado ao cromossomo X(RHX)</b></p>
	</div>
	<div class="col-sm-12" id="conteudo_tratamento" style="background: red;display: none;">
		<p style="color: #eee">2</p>
	</div>
	<div class="col-sm-12" id="conteudo_objetivos" style="background: black; display: none;">
		<p style="color: #eee">3</p>
	</div>

	<script type="text/javascript">
		function ativarDesativarConteudo(menu){
			if (menu == "botao_objetivos") {
				document.getElementById('conteudo_oQueE').style = "display: none;";
				document.getElementById('conteudo_tratamento').style = "display: none;";
				document.getElementById('conteudo_objetivos').style = "display: block;background: black;";
			}else if (menu == "botao_tratamento") {
				document.getElementById('conteudo_oQueE').style = "display: none;";
				document.getElementById('conteudo_tratamento').style = "display: block;background: red;";
				document.getElementById('conteudo_objetivos').style = "display: none;";
			}else {
				document.getElementById('conteudo_oQueE').style = "display: block;background: green;";
				document.getElementById('conteudo_tratamento').style = "display: none;";
				document.getElementById('conteudo_objetivos').style = "display: none;";
			}
		}
	</script>
	<div class="col-sm-6">
		<h2 style="text-align: center;">Noticias</h2>
	</div>
	<div class="col-sm-6 panel-body">
		<h3 style="text-align: center;">Contato</h3>
	</div>
	<div class="panel-body">
        <ul class="list-group">
    	<?php 
            $resultado = lista_noticias();
    		foreach ($resultado as $result) {?>
    				
    			<div class="col-sm-6">	
				 <li class="list-group-item">
					<a href="noticia/<?=$result['id']?>"><?=$result['titulo']?></a><a href="editar_noticia.php?id=<?=$result['id']?>" class="text-info pull-right"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				</a>
				</li>
				<li><?=$result['descricao']?></li>
				</div>
			
		<?php } ?>
        </ul>

</body>
</html>