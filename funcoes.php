<?php
include("conexao.php");


function busca_noticia($id){
	$servername = "localhost";
$database = "rhx";
$username = "root";
$password = "root";
$conexao3 = mysqli_connect($servername, $username, $password, $database) or die ("Não foi possivel conectar");
	$sql ="select * from noticia where id=$id";
	$resultado = mysqli_query($conexao3,$sql) or die("Erro");
	$dados = mysqli_fetch_array($resultado);
    return $dados;
}

function lista_noticias(){

$servername = "localhost";
$database = "rhx";
$username = "root";
$password = "root";

 $conexao2 = mysqli_connect($servername, $username, $password, $database) or die ("Não foi possivel conectar");
	$sql ="select * from noticia";
	$resultado = mysqli_query($conexao2,$sql) or die("Erro");
    return $resultado;
}

?>