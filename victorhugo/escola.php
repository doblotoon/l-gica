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
	print("que comecem os jogos!");
?>