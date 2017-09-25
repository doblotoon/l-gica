<?php
/* comenrtarios para o proximo exercicio

	divisao de inteiro
	$hora = (int)$total / 3600;	

	resto da divisao 
	$minuto = $total % 3600;
*/

	print("informe o valor total de segundos \n");
//seg = total de segundos
	$seg=fgets(STDIN);


	$hora = floor($seg / 3600);
	
	$resthora = ($seg % 3600);

	$minuto = floor($resthora / 60);

	$segundo = ($seg %60);

	print(" o resultado é: " .$hora .":". $minuto.":" . $segundo ."\n");

?>
