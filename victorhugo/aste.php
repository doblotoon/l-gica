<?php
	
	for ($linha=5; $linha >0 ; $linha=$linha-1) { 
		for ($coluna=5; $coluna >=$linha ; $coluna=$coluna-1) { 
			if ($linha + $coluna ==8) {
			 	print("*");
			}else
				print(" ");
		}	
		print("\n");	
	}
?>