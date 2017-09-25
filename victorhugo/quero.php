<?php
	
	print("informe o preco");
	$preco = fgets(STDIN);

	print("infome a forma de pagamento:
		1 - a vista(dinheiro ou cheque), com 10% de desconto
		2 - a vista(cartao de credito)
		3 - em duas vezes, sem desconto 
		4 - em tres vezes, com um acrescimo de 10% \n");
	$forma = fgets(STDIN);

	if ($forma == 1) {
		$final = $preco *0.9 ; 
		$parcelas = 1
		
	}elseif ($forma == 2) {
		$final = $preco *0.95 ; 
		$parcelas = 1

	}elseif ($forma == 3) {
		$final = $preco /2;
		$parcelas = 2;

	}elseif ($forma == 4) {
		$final = $preco .1.1/3;
		$parcelas = 3;
	}

	$final_foermatado = number_format($final,2);
	print("o valor a ser pago será". $parcelas."parcela(s) de R$".$final_foermatado."\n");

?>