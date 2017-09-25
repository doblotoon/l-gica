<?php

$opcao = 1;
while ($opcao != 0) {

	print("informe o valor do produto");
	$produto = fgets(STDIN);

	print(" escolha uma forma de pagamento
		1 - a vista em dinhero, com 10% de desconto
		2 - a vista no cartao, com 5% de desconto
		3 - em 2 vezes, preco normal sem juros
		4 - em 3 vezes, com 10% de juros\n ");
	$opcao = fgets(STDIN);

	switch ($opcao) {
		case 1:
			print("voce vai pagar R$".($produto*0.9)."\n");
			break;
		case 2:
			print("voce vai pagar R$".($produto*0.95)."\n");
			break;
		case 3:
			print("voce vai pagar R$".$produto."\n");
				break;
		case 4:
			print("voce vai pagar R$".($produto*1.1)."\n");
				break;		
		default:
			break;
	}
}
?>