<?php
		///questão 7///
	print("quantos m2 serao pintados \n");
	$metros=fgets(STDIN);

	$litros= $metros/6;

	$latas= $litros/18;
	$latas= ceil($latas);

	$precolata= $latas*80;
    $precolata= ceil($precolata);

	$galao= $litros/3.6;
	$galao= ceil($galao);

    $precogalao= $galao*25 ;
    $precogalao= ceil($precogalao);


    print("
    	voce gostaria de comprar em latas ou em galoes?
    	para latas, digite 1 
    	para galoes, digite 2 
    	para alternar entre latas e galoes, digite 3\n");
    $opcao=fgets(STDIN);

    if ($opcao==1) {
   		 	print("voce comprara ".$latas." lata(s) e vai pagar R$".$precolata."\n");
    	}elseif ($opcao==2) {
    		print("voce comprara ".$galao." galao(es) e vai pagar R$".$precogalao."\n");
   		}elseif ($opcao==3) {
   			while ( $litros>18) {
   				$litrosmelhor= $litros-18;
   			}while ( $litrosmelhor> 3.6) {
   				$litrosmelhor= $litrosmelhor-3.6;
   				$galaomelhor++;
   			}if ($litrosmelhor>0) {
   				$galaomelhor++;
   				$litrosmelhor=$litrosmelhor-3.6;
   		//preco da lata melhor//
    	$plm=$latasmelhor*80;
		//preco do galao melhor//
    	$pgm=$galaomelhor*25;
    	$somamelhor=$plm+$pgm;
   		print("voce comprara ".$latasmelhor." lata(s) e ".$galaomelhor."galoes, e vai pagar R$".$somamelhor."\n");
   	}
   	print("obrigado e volte sempre");
?>