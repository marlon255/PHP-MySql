<?php
include_once("php/conexao.php");

header('Content-Type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR.utf8');	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

 
 <style>
 p
 {
	padding:0;
	margin:0; 
 }
 
 .linkCadastro
 {
	text-decoration:none;
	color:#BFBEDC;
	border-style:solid;
	border-color:#4B426B;
	border-width:1px;
	background-color:#6D66BB; 
	display:block;
	padding:5px;
	text-align:center;
	width:170px;
	margin:0 auto;
	border-radius:10px;
 }
 
 .linkCadastro:hover
 {
	background-color:#71699F;
	color:#E2DFF1; 
	border-color:#fff;
 }
 </style>
</head>


<body>
<?php

$sql = "INSERT INTO tipo_equipamento (tipo_equip, sigla_equip) VALUES('".$_REQUEST['tipo_equip']."', '".$_REQUEST['sigla_equip']."')"; 
$insere = $mysqli->query($sql);



if($insere)
{
	echo "<p class='pos' align='center'>Dados inseridos com sucesso</p>";	
}
else
{
	echo "<p class='neg' align='center'>Erro ao inserir dados</p>";	
}

	

?>

</body>
</html>