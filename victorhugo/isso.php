<?php 

	$inteiros=array(13,14,2,1,5,7);

	for ($i=0; $i <6 ; $i++) { 
		for ($j=0; $j <6 ; $j++) { 
			if ($inteiros[$i]>$inteiros[$j]) {

				$aux=$inteiros[$j];

				$inteiros[$j]=$inteiros[$i];
				$inteiros[$i]=$aux;

				print_r($inteiros);

			}
		}
	}


?>