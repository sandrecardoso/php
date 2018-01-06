<?php
$host="localhost";
$user="root";
$pass="10182400";
$banco="cadastro";
$conexao=mysql_connect($host,$user,$pass)or die(mysql_error());
mysql_select_db($banco)or die(mysql_error());

session_start();
if(!isset($_SESSION['email'])||!isset($_SESSION['senha'])){
	
	header("Location:index.html");
	exit;
}else{
	echo "<center>Você está logado!!!</center>";
}
?>
<html>
<head>
<style>
a{
	position:absolute;
	top:10;
	left:1300;
}
</style>
<meta charset="UTF-8">
<title>painel</title>

</head>
<body>
<a href="logout.php" id="sair" >Logout</a>
<img src="formatura.jpg"></img>
<p><?=$linha['email']?> / <?=$linha['senha']?></p>
</body>
</html>



