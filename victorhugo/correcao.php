<?php
	function meses($a,$b)
	{
		for ($i=0; $i < sizeof($b) ; $i++) { 
			if ($a==$b[$i]) {
				echo $a."corresponde ao mes de".$b[$i]."\n";
			}else{
				echo "o numero escolhido não corresponde a nenhum mes";
			}
		}
	}
	echo "informe um numero: \n ";
	$n=fgets(STDIN);

	$mes= array("janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro");

	meses($n,$mes);
?>