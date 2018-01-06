<?php
$host="localhost";
$user="root";
$pass="";
$banco="cadastro";
$conexao=mysql_connect($host,$user,$pass)or die(mysql_error());
mysql_select_db($banco)or die(mysql_error());
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql=mysql_query("INSERT INTO usuarios(login,senha)VALUES('$email','$senha')");
echo "<center><h1>Cadastro efetuado com sucesso!!!</h1></center>";
header("Location:index.html");

?>
<html>
<head>
<script>
function voltar()
{
	setTimeout("window.location='index.html'",5000);
}
</script>
<title></title>
</head>
<body>

</body>
</html>
