<?php
include "config/conn.php";
ini_set('default_charset','UTF-8');


if(isset($_FILES["arquivo"])){

$arquivo = $_FILES["arquivo"];

$pasta_dir = "fotos/";//diretorio dos arquivos
//se não existir a pasta ele cria uma
if(!file_exists($pasta_dir)){
mkdir($pasta_dir);
}

$arquivo_nome = $pasta_dir . $arquivo["name"];


//recebe valores do formulario 

$evento =$_POST['evento'];
$nome = $_POST['nome'];
$mensagem =$_POST['mensagem'];

	
//faz insercao

mysql_query("SET NAMES 'utf8'");

$query1 = mysql_query("INSERT INTO evento(levento,nome,mensagem,imagem)VALUES (
'$evento','$nome','$mensagem','$arquivo_nome')") or die(mysql_error());

// Faz o upload da imagem

move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);

//echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=../index.html'>";

}

?>