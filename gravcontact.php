<?php
	include 'cabecalho.html';
	foreach ($_POST as $ind => $ref) {
		print($ind." :".$ref."<br/>");
	}
	include 'rodape.html';
	?>