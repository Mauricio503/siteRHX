<?php
include("conexao.php");


function busca_noticia($id){
	include("conexao.php");
	$sql ="select * from noticia where id=$id";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
	$dados = mysqli_fetch_array($resultado);
    return $dados;
}

function lista_noticias(){
	include("conexao.php");
	$sql ="select * from noticia";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
    return $resultado;
}

?>