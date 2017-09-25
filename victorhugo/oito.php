<?php
	print("informe o numero inicial \n");
	$num=fgets(STDIN);
	print("o menor numero e ".$num."\n");
	$dois=0;
	while ($dois<20) {
		print($num."\n");
		$dois++;
		$num++;
		$tres=$num;
	}
	print("o maior numero e ".$tres."\n");
?>