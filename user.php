﻿<html>
<head>
<title>Autenticação</title>
<script type="text/javascript">
  function loginsucessful()
  {
  setTimeout("window.location='painel.php'",3000);
  }
  function loginfailed()
  {
  setTimeout("window.location='index.html'",3000);
  }
</script>
<?php
$host="localhost";
$user="root";
$pass="10182400";
$banco="cadastro";
$conexao=mysql_connect($host,$user,$pass)or die(mysql_error());
mysql_select_db($banco)or die(mysql_error());
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql=mysql_query("SELECT * FROM usuarios WHERE login='$email' and senha='$senha'")or die(mysql_error());

$row=mysql_num_rows($sql);
if($row>0){
   session_start();
   $_SESSION['email']=$_POST['email'];
   $_SESSION['senha']=$_POST['senha'];
   echo "<center>Você foi logado com sucesso!!!Aguarde um momento!!!</center>"; 
   echo"<script>loginsucessful()</script>";
	}else{
		echo"<center>login errado!!!tente novamente!!!</center>";
		echo"<script>loginfailed()</script>";
	}
?>

</head>
<body>
</body>
</html>