<?php
	print("informe o valor do produto");
	$produto = fgets(STDIN);

	print("escolha uma forma de pagamento
		1 - a vista no dinheiro, com 10% de desconto
		2 - a vista no cartão, com 55 de desconto
		3 - em duas vezes no cartao, com o preco normal do produto
		4 - em tres vezes, com um acrescimo de 10%\n");
	$opcao = fgets(STDIN);
	
	if ($opcao == 1) {
		print("voce vai pagar R$".$produto*0.9."\n");
	}elseif ($opcao == 2) {
		print("voce vai pagar R$".$produto*0.95."\n");
	}elseif ($opcao == 3) {
		print("voce vai pagar R$".$produto."\n");
	}elseif ($opcao == 4) {
		print("voce vai pagar R$".$produto*1.1);
	}


?>
