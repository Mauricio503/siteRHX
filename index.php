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

	<!-- Abas nav -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item col-sm-3">
    <a class="nav-link active" id="oQueE-tab" data-toggle="tab" role="tab" aria-controls="oQueE" aria-selected="true"
    style="background: green;border-radius: 100px 100px 0 0;color: #eee;text-align: center;" onclick="alteraConteudo('oQueE')" 
    >O que é?</a>
  </li>
  <li class="nav-item col-sm-3">
    <a class="nav-link" id="tratamento-tab" data-toggle="tab"  role="tab" aria-controls="tratamento" aria-selected="false"
   style="background: red;border-radius: 100px 100px 0 0;color: #eee;text-align: center;" onclick="alteraConteudo('tratamento')">Tratamento</a>
  </li>
  <li class="nav-item col-sm-3">
    <a class="nav-link" id="objetivos-tab" data-toggle="tab" role="tab" aria-controls="objetivos" aria-selected="false"
    style="background: black;border-radius: 100px 100px 0 0;color: #eee;text-align: center;" onclick="alteraConteudo('objetivos')" 
    >Objetivos</a>
  </li>
 
</ul>

<!-- Painel de abas -->
<div class="tab-content">
  <div class="tab-pane active" id="oQueE" role="tabpanel" aria-labelledby="oQueE-tab" style="background: green;color: #eee">O que é?</div>
  <div class="tab-pane" id="tratamento" role="tabpanel" aria-labelledby="tratamento-tab" style="background: red;color: #eee">Tratamento</div>
  <div class="tab-pane" id="objetivos" role="tabpanel" aria-labelledby="objetivos-tab" style="background: black;color: #eee">Objetivos</div>
</div>

<script type="text/javascript">
	function alteraConteudo(menu){
		if(menu == "oQueE"){
			document.getElementById('oQueE').setAttribute("class","tab-pane active");
			document.getElementById('tratamento').setAttribute("class","tab-pane");
			document.getElementById('objetivos').setAttribute("class","tab-pane");
		} else if (menu == "tratamento"){
			document.getElementById('oQueE').setAttribute("class","tab-pane");
			document.getElementById('tratamento').setAttribute("class","tab-pane active");
			document.getElementById('objetivos').setAttribute("class","tab-pane");
		} else {
			document.getElementById('oQueE').setAttribute("class","tab-pane");
			document.getElementById('tratamento').setAttribute("class","tab-pane");
			document.getElementById('objetivos').setAttribute("class","tab-pane active");
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