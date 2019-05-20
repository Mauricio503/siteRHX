<?php
include("conexao.php");

if (!function_exists('lista_posts')) {
function lista_posts($id){

$servername = "localhost";
$database = "rhx";
$username = "root";
$password = "root";

 $conexao2 = mysqli_connect($servername, $username, $password, $database) or die ("Não foi possivel conectar");
	$sql ="select * from post where idtopico=$id";
	$resultado = mysqli_query($conexao2,$sql) or die("Erro");
    return $resultado;
}
}
if (!function_exists('temas')) {
function temas(){
	$servername = "localhost";
$database = "rhx";
$username = "root";
$password = "root";

 $conexao = mysqli_connect($servername, $username, $password, $database) or die ("Não foi possivel conectar");
		$sql ="select * from tema";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
    return $resultado;
}
}

if (!function_exists('lista_topicos')) {
function lista_topicos($id){
	$servername = "localhost";
$database = "rhx";
$username = "root";
$password = "root";

 $conexao3 = mysqli_connect($servername, $username, $password, $database) or die ("Não foi possivel conectar");
	$sql ="select * from topico where idtema=$id";
	$resultado = mysqli_query($conexao3,$sql) or die("Erro");
    return $resultado;
	}
}
if (!function_exists('busca_usuario')) {
function busca_usuario($idusuario){
	$servername = "localhost";
$database = "rhx";
$username = "root";
$password = "root";

 $conexao3 = mysqli_connect($servername, $username, $password, $database) or die ("Não foi possivel conectar");
	$sql ="select * from usuario where id=$idusuario";
	$resultado = mysqli_query($conexao3,$sql) or die("Erro");
   $dados = mysqli_fetch_array($resultado);
    return $dados;
	}
}

if (!function_exists('quantidade_topico')) {
function quantidade_topico($idtema){
	$servername = "localhost";
$database = "rhx";
$username = "root";
$password = "root";

 $conexao4 = mysqli_connect($servername, $username, $password, $database) or die ("Não foi possivel conectar");
	$sql ="select count(id) contagem from topico where idTema=$idtema";
	$resultado = mysqli_query($conexao4,$sql) or die("Erro");
	$dados = mysqli_fetch_array($resultado);
    return $dados;
	}
}

if (!function_exists('todos_topicos_tema')) {
function todos_topicos_tema($idtema){
	$servername = "localhost";
$database = "rhx";
$username = "root";
$password = "root";

 $conexao4 = mysqli_connect($servername, $username, $password, $database) or die ("Não foi possivel conectar");
	$sql ="select * from topico where idTema=$idtema";
	$resultado = mysqli_query($conexao4,$sql) or die("Erro");
    return $resultado;
	}
}

?>