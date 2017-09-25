<?php

//exercicio letra E dia 1.06

for($linha=1; $linha<=5; $linha++){
	print("\n");
	for($coluna=1; $coluna<=5; $coluna++){
		if($linha==1 or $linha==3 or $coluna==1 or $linha==5){
			print(" * ");
		}else{
			print("   ");
		}
		
	}
}	

?>