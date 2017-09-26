<?php
	$cidade = "Código;Nome;Telefone;Email";
	//Funcao explode separa as partes de uma string, dado um separador
	$partes = explode(";", $cidade);
	print("<pre>");
	print_r($partes);
	print("</pre>");
?>