<?php
	/* 
	//1
	function soma($a , $b){
		$resultado= $a+$b;
		print("a soma dos dois números é ".$resultado."\n");
	}

	print("informe um número: \n");
	$a=fgets(STDIN);

	print("informe outro número: \n");
	$b=fgets(STDIN);

	soma($a+$b);	
	*/
	/*
	//2
	function multiplica($hue ,$hues)
	{
		 $produto = $hue * $hues;
		 echo "A multiplicação é: ".$produto." \n";
	}

	echo "Informe um numero: \n";
	$a = fgets(STDIN);

	echo "Informe outro numero: \n";
	$b = fgets(STDIN);

	multiplica($a , $b);
	*/
	/*
	//3
	function calcula($num , $nois , $opc){	
		if ($opc==1) {
			$sumo= $num+$nois;
			print($sumo."\n");
		}elseif ($opc==2) {
			$diminui= $num-$nois;
			print($diminui."\n");
		}elseif ($opc==3) {
			$multi=$num*$nois;
			print($multi."\n");
		}else{
			$divi= $num/$nois;
			print($divi."\n");
		}
	}
	print("informe um número \n");
	$c=trim( fgets(STDIN));

	print("informe o segundo número \n");
	$d=trim(fgets(STDIN));

	print("
		escolha uma operação:

		1-soma
		2-subtração
		3-multiplicação
		4-divisão \n");
		$opera=trim(fgets(STDIN));

	calcula($c , $d , $opera);
	*/
	//4
	function more($um , $dois){
		$moore= $um + $dois;
		return $moore;
	}

	/*print("informe um numero \n");
	$primeiro=trim(fgets(STDIN));

	print("informe outro numero \n");
	$segundo=trim(fgets(STDIN));

	$resultado= more($primeiro , $segundo);

	print( $resultado."\n" );
	*/
	
	//5

	function prod($um , $dois){
		$duto= $um*$dois;
		return $duto;
	}

	/*echo "informe um numero \n";
	$y=trim(fgets(STDIN));

	echo "informe outro numero \n";
	$x= trim(fgets(STDIN));

	$z= prod($y, $x);
	print($z."\n");
	*/
	
	//6
	function subtrai($um , $dois){
		$sub= $um-$dois;
		return $sub;
	}

	/*print("informe um numero \n");
	$d=trim(fgets(STDIN));

	print("informe outro numero \n");
	$f= trim(fgets(STDIN));

	$t= subtrai($d , $f);
	print($t."\n");
	*/
	
	//7
	function divisao($um,$dois){
		$div= $um/$dois;
		return $div;
	}
	/*echo "informe um numero \n";
	$v= trim(fgets(STDIN));

	echo "informe outro numero\n";
	$h= trim(fgets(STDIN));

	$n=divisao($v,$h);

	print($n."\n");
	
	//8
	function operadores($um,$dois,$opc){
		if ($opc==1) {
			$resultado= more($um,$dois);
		}elseif ($opc==2) {
			$resultado=prod($um,$dois);
		}elseif ($opc==3) {
			$resultado= subtrai($um,$dois);
		}elseif ($opc==4) {
			$resultado= divisao($um,$dois);
		}
		return $resultado;
	}
	
	print("informe un mumero \n");
	$g=trim(fgets(STDIN));

	print("informe outro numero \n");
	$k=trim(fgets(STDIN));

	print("
		informe a operacao 
		
		1-adicao
		2-multiplicacao
		3-subtracao
		4-divisao\n");
	$op=trim(fgets(STDIN));

	$proba=operadores($g,$k,$op);

	print($proba."\n");
	*/
	//9
	/*
	function situacao($a,$b,$c){
		$soma=operadores($a,$b,1);
		$media=operadores($soma,2,4);
		if ($media>=$c) {
			$situacao_aluno="aprovado";
		}else{
			$situacao_aluno="reprovado";
		}
		return $situacao_aluno;
	}
	print("informe a primeira nota: \n");
	$notaum=trim(fgets(STDIN));

	print("informe a segunda nota: \n");
	$notadois=trim(fgets(STDIN));

	print("informe a media a ser aplicada \n");
	$suamedia=trim(fgets(STDIN));

	$final=situacao($notaum,$notadois,$suamedia);

	print("voce esta ".$final."\n");
	*/
	//10
	/*
	function maior($ahey){
		$maior=$ahey[0];
		$maior=0
		for ($i=0; $i <sizeof($ahey) ; $i++) { 
			if ($ahey[$i]>$maior) {
				$maior=$maior[$i];
			}				

				if ($i==0) {
					$maior=$ar[$i]
				}
			
				return $maior;
		}
	}

	$numerais=array(2,5,3,8,1);

	$nnn=maior($numerais);
	*/





//12
 	function crescente($ar){
 		$tamanho=sizeof($ar)
 		for ($i=0; $i <sizeof($ar) ; $i++) { 
 			for ($j=0; $j <sizeof($ar) ; $j++) { 
 				if ($menor[$i]>$a[$j]) {
 					$aux=$ar[$i];
 					$menor[$i]=$aux[$j];
 					$ar[$j]=$aux;
 				}
 			}
 		}

 		return $ar;
 	}
 	$sb=array(12,3,56,4,23,-7);
	$z =crescente($sb);

	print($z);






























?>