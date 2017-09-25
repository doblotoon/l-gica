<?php
	print("bem-vindo ao programa de cadastro aos jogos de volei \n");
	for ($cad = 1; $cad <6 ; $cad++) {
		for ($atleta = 1; $atleta <7 ; $atleta++) { 
			print("cadastro da equipe n: ".$cad." atleta n: ".$atleta."\n");
			print("informe seu nome: \n");
			$nome=fgets(STDIN);
			print("informe sual altura: \n");
			$altura=fgets(STDIN);
		}
	}
	print("deseja informar outra eqipe? \n");
	$indeciso=fgets(STDIN);
	if ($indeciso== s) {
		for ($atleta2 = 1; $atleta2 <7 ; $atleta2++) { 
			print("cadastro da equipe alternativa atleta n: ".$atleta."\n");
			print("informe seu nome: \n");
			$nome=fgets(STDIN);
			print("informe sual altura: \n");
			$altura=fgets(STDIN);
		
	}
	print("que comecem os jogos!\n");
?>