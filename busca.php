<?php
include('conexao.php');
	
	//Recuperar o valor da palavra
	$noticias = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$noticias = "SELECT * FROM noticia WHERE titulo LIKE '%$noticias%'";
	$resultado_cursos = mysqli_query($conexao, $noticias);
	
	if(mysqli_num_rows($resultado_cursos) <= 0){
		echo "Nenhum curso encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_cursos)){
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
