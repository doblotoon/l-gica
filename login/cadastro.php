<?php
	session_start();

	//isset = existe a variavel?

	if (isset($_SESSION['login']) and $_SESSION['login'] == 'admin') {
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Cadastro </title>
	</head>
	<body>
		<h2> TESTE</h2>
		<img src="http://www.cadastro-zurc-investimentos.com/wp-content/uploads/2017/03/cadastro-zurc-investimentos-como-usar-o-backoffice.gif">
	</body>
	</html>
<?php
	}else{
		echo "ACESSO RESTRITO OTARRIO!";
	}
?>