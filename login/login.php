<?php
	session_start();
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if ($login == 'admin' and $senha == 'admin') {
		echo "<p>bem vindo senhor supemo deste programa</p>";

		$_SESSION['nome'] = 'Administrador';
		$_SESSION['login'] = 'admin';

		echo "<meta http-equiv='refresh' content='3;url=restrito_adm.php'>";
	}else{
		echo "<p>dados inválidos </p>";
		echo "<img src='http://2.bp.blogspot.com/-qRlsrZ-iG6o/VPHQvlUZ43I/AAAAAAAAMcA/OP0D4zzC_Xc/s1600/Bugs%2BBunny%2B13.gif'>";
		echo "<meta http-equiv='refresh' content='3;url=publica.php'>";
	}
?>