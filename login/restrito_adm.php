<?php 
	session_start();
	if ($_SESSION['login'] == 'admin'){
?>
<!DOCTYPE html>
<html>
<head>	
	<title>PAGINA DO <?=$_SESSION['nome']?></title>
</head>
<body>
	<img src='https://i.pinimg.com/originals/ba/1a/ca/ba1aca2fc80472c003991e01b43e7d18.gif'>
	<a href="logout.php">Sair</a>
	<h2>KKJ</h2>
	<p>MASOQ...</p>

	<a href="cadastro.php">cadastro</a>
</body>
</html>

<?php
}else{
	echo "ACESSO RESTRITO!";
}
?>