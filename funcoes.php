<?php
include("conexao.php");
function busca_noticia($id){
	$sql ="select * from noticia where id=$id";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
    return $resultado;
}

function lista_noticias(){

$servername = "localhost";
$database = "rhx";
$username = "root";
$password = "root";
// Create connection
 $conexao2 = mysqli_connect($servername, $username, $password, $database) or die ("Não foi possivel conectar");
	$sql ="select * from noticia";
	$resultado = mysqli_query($conexao2,$sql) or die("Erro");
    return $resultado;
}
?>