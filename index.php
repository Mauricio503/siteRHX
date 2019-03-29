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
	<div class="col-sm-8">
		<h2 style="text-align: center;font-family: Bookman;">Informativo</h2>

		<div class=" panel-body">
        <ul class="list-group">
    	<?php 
            $resultado = lista_noticias();
    		foreach ($resultado as $result) {?>
    				
    			<div>	
    				<img src="https://rockcontent.com/blog/wp-content/uploads/2016/08/imagens-gratis-6.jpg" class="col-sm-2" style="height: 100px; border: solid 1px #000; padding: 0;">
				 <li class="col-sm-8 col-sm-push-1" style=" list-style-type:none">
				 	<h4>
				 		<b>
						<a href="noticia/<?=$result['id']?>" style="color: #000; font-family: Marker Felt; font-size: 20px;" >	<?=$result['titulo']?></a><a href="editar_noticia.php?id=<?=$result['id']?>" class="text-info pull-right">
						</a>
						</b>
					</h4>
				</li>
				<li style=" list-style-type:none" class="col-sm-8 col-sm-push-1">
					<?php
						echo substr($result['descricao'], 0, 300);
					?>	... <a href="">ver mais</a>
					</li>
				</div>
			
		<?php } ?>
        </ul>
    </div>
	</div>
	<div class="col-sm-4 panel-body">
		<table>
			<tr>
			<th style=" border-top: 20px solid transparent; 
  border-right: 50px solid #C3C3C3; 
  border-bottom: 20px solid transparent; float: left;list-style-type:none"></th>
  			<th style="width: 300px; height: 10px; background:#C3C3C3 "><h3 style="text-align: center; font-family: Bookman; margin: 0;">Contato</h3></th>
  			
			</tr>
			<tr>
			<td style=" border-top: 20px solid transparent; 
  border-right: 50px solid #DCDCDC; 
  border-bottom: 20px solid transparent; float: left;list-style-type:none">
			</td>
			<td style="width: 300px; height: 10px; background:#DCDCDC;">
				<a href="https://chat.whatsapp.com/DAUmPrRX6uAGZJlfoFIs4r" >
					<div style="margin-left: 20px;">
			<img class="col-sm-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/WhatsApp_logo-color-vertical.svg/294px-WhatsApp_logo-color-vertical.svg.png" style="padding: 0;margin-top: 2px;">
			</div>
				<b class="col-sm-8" style="font-size: 20px;"> Grupo Whatsapp</b>
			</a>
			</td>
			</tr>
			<tr>
			<td style=" border-top: 20px solid transparent; 
  border-right: 50px solid #DCDCDC; 
  border-bottom: 20px solid transparent; float: left;list-style-type:none">
			</td>
			<td style="width: 300px; height: 10px; background:#DCDCDC;">
					<div style="margin-left: 20px;">
			<img class="col-sm-1" src="http://www.fazenda.gov.br/orgaos/colegiados/crsfn/imagens/email/@@images/59b4210b-2170-4aaa-8a77-988c83dbf1b0.png" style="padding: 0;margin-top: 5px;">
			</div>
				<b class="col-sm-8" style="font-size: 20px;"> atendimento@rhx.org</b>
			</a>
			</td>
			</tr>
			<tr>
			<td style=" border-top: 20px solid transparent; 
  border-right: 50px solid #DCDCDC; 
  border-bottom: 20px solid transparent; float: left;list-style-type:none">
			</td>
			<td style="width: 300px; height: 10px; background:#DCDCDC;">
				<a href="">
					<div style="margin-left: 20px;">
			<img class="col-sm-1" src="https://1.bp.blogspot.com/-85-K3datVr8/WMATuRxupBI/AAAAAAAAl1E/UZc4SEeD_JwUbS5KmD6JzpwmOGFBfIojgCLcB/s1600/Daniel%2BStudios%2BPack%2BRender%2B%252820%2529.png" style="padding: 0;margin-top: 5px;">
			</div>
				<b class="col-sm-8" style="font-size: 20px;">Fórum</b>
				</a>
			</a>
			</td>
			</tr>
		</table>
		
	</div>

		<?php 
	include("footer.php");
	?>
</body>
</html>