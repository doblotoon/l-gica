<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>public</title>
</head>
<body>
<?php
	if (isset($_SESSION['login']) and $_SESSION['login'] == 'admin') {

?>
	<h2>Bem-vindo <?=$_SESSION['nome']?></h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim placeat, qui. Deleniti aut animi aliquam, sequi! Minima quos quisquam adipisci iusto nam fuga molestias, distinctio expedita repellendus, voluptates, libero aperiam.</p>
	<a href="logout.php">Sair</a>
<?php

}else{

?>
	<h2>Bem-vindo</h2>
	<form action="login.php" method="post">
		<label for="login">login</label>
		<input type="text" name="login">

		<label for="senha">senha</label>
		<input type="password" name="senha">

		<input type="submit" name="entrar">
	</form>	
<?php

}

?>
</body>
</html>