<?php
	print("informe seu nome \n");
	
	$nome = fgets(STDIN);

	print("informe a sua nota do primeiro trimestre \n");
	$nota1 = fgets(STDIN);


	print("informe a sua nota do segundo trimestre \n");
	$nota2 = fgets(STDIN);


	print("informe a nota do trimestre final \n");
	$nota3 = fgets(STDIN); 	
	

	print("informe a sua frequencia em dias \n");
	$frequencia = fgets(STDIN);

	//conta para realizar a media
	$soma = ($nota1 + $nota2 + $nota3);
	$notatotal = ($soma / 3);

				if ($notatotal >= 7) {
					print("sua média é ".$notatotal.", por nota você está aprovado, meus parabéns ". $nome." \n");
				}else{ 
					print("sua média é ".$notatotal.", está em exame $nome \n");
				} if ($notatotal< 7) {
					print("informe sua nota no exame \n");
					$exame = fgets(STDIN);

					$totalexame = ($notatotal + $exame)/2;
					if ($totalexame >= 5) {
						print("aprovado ".$nome." \n");
					}else 
					print("reprovado, ".$nome." \n");
				}


				if ($frequencia >= 150) {
					print("por frequencia você está aprovado ".$nome."  \n");
				}else{ 
					print("você reprovou por falta de frequencia ".$nome." \n");
				} 
	print("obrigado! \n");
?>