<?php
	include('conexao.php');
	
	//Recuperar o valor da palavra
	$consulta = $_POST['consulta'];
	
	if ($consulta == "ultimoMes") {
		$consulta = "SELECT * FROM noticia WHERE data > (NOW() - INTERVAL 30 DAY);";
	}else if($consulta == "ultimo3Meses"){
		$consulta = "SELECT * FROM noticia WHERE data > (NOW() - INTERVAL 90 DAY);";
	} else if ($consulta == "ultimo6Meses"){
		$consulta = "SELECT * FROM noticia WHERE data > (NOW() - INTERVAL 180 DAY);";
	} else if ($consulta == "ultimoAno"){
		$consulta = "SELECT * FROM noticia WHERE data > (NOW() - INTERVAL 365 DAY);";
	} else {
		$consulta = "SELECT * FROM noticia";
	}
	$resultado_pesquisa = mysqli_query($conexao, $consulta);
	
	if(mysqli_num_rows($resultado_pesquisa) <= 0){
		echo "Nenhum curso encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_pesquisa)){
			echo "<div class='col-sm-12 col-xs-12' style='margin-top: 10px;''>	
			<img src='".$rows['imagem']."' class='col-sm-2 col-xs-5' style='height: 100px; border: solid 1px #000; padding: 0;'>
			<li class='col-sm-8 col-sm-push-1 col-xs-6' style='list-style-type:none'>
			<h4>
			<b>
			<a href='noticia/".$rows['id']."'style='color: #000; font-family: Marker Felt; font-size: 20px;'> ".$rows['titulo']."
			</a><a href='editar_noticia.php?id=".$rows['id']."'class='text-info pull-right'></a>
			</h4>
			</b>
			</li>
			<li style='list-style-type:none' class='col-lg-8 col-lg-push-1 col-xs-6'> ".substr($rows['descricao'], 0, 300)."...
			<a href=''>ver mais</a> </li>
			</div>";
		}
	}

	
?>
