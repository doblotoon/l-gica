<?php
	/*estrutura de seleção simples

	instrução1 e insntrução2 somente acontecem se a <condição> for verdadeira
	se<condição> então
	instrução1;
	instrução2;
	fimse 
	*/
		print("informe o valor de x = \n");
	
		$x = fgets(STDIN);
	
		if ($x>0)  {
	
		print("x é positivo \n");
	
			}else{ 
			print("x é negativo ou zero \n");
			}	

		print("acabou o programa \n");
?>