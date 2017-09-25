<?php
	print("Irforme o valor de hora \n");
	$hora = fgets(STDIN);

	print("Infiorme o valor de minutos \n");
	$minuto = fgets(STDIN);

	print("Informe o valor de segundos \n");
	$segundo = fgets(STDIN);

	//tsh = total de segundos na hora
	$tsh = $hora * 3600;

	//tsm = total de segundos no minuto
	$tsm = $minuto * 60;

	//soma dos resultados antes calculados 
	$total = $tsh + $tsm + $segundo;

	print("o valor de segundos é de " . $total . "\n" );
?>
