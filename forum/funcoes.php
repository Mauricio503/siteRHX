<?php


if (!function_exists('lista_posts')) {
function lista_posts($id){
	include("conexao.php");
	$sql ="select * from post where idtopico=$id";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
    return $resultado;
}
}
if (!function_exists('temas')) {
function temas(){
	include("conexao.php");
	$sql ="select * from tema";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
    return $resultado;
}
}

if (!function_exists('lista_topicos')) {
function lista_topicos($id){
	include("conexao.php");
	$sql ="select * from topico where idtema=$id";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
    return $resultado;
	}
}
if (!function_exists('busca_usuario')) {
function busca_usuario($idusuario){
	include("conexao.php");
	$sql ="select * from usuario where id=$idusuario";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
   $dados = mysqli_fetch_array($resultado);
    return $dados;
	}
}

if (!function_exists('quantidade_topico')) {
function quantidade_topico($idtema){
	include("conexao.php");
	$sql ="select count(id) contagem from topico where idTema=$idtema";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
	$dados = mysqli_fetch_array($resultado);
    return $dados;
	}
}

if (!function_exists('todos_topicos_tema')) {
function todos_topicos_tema($idtema){
	include("conexao.php");
	$sql ="select * from topico where idTema=$idtema";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
    return $resultado;
	}
}

if (!function_exists('quantidade_post')) {
function quantidade_post($idtopico){
	include("conexao.php");
	$sql ="select count(id) from post where idtopico=$idtopico";
	$resultado = mysqli_query($conexao,$sql) or die("Erro");
	$dados = mysqli_fetch_array($resultado);
    return $dados;
	}
}

?>