<?php
	$cabe = file_get_contents("rodape.html");
	echo $cabe;

	$cor=0;

	$dados = file("terra.csv");

	print("<table border='1'>");


	foreach ($dados as $linha) {
		if ($partes%2==0) {
			$cor='linhaum';
		}elseif ($partes%2==1) {
			$cor='linhadois';
		}

		$partes = explode( ";", $linha);
		print("<tr class='".$cor."'>
				<td>".$partes[0]."</td>
				<td>".$partes[1]."</td>
				<td>".$partes[2]."</td>
				<td>".$partes[3]."</td>");

}
	echo("</table>");
	print(date("H:i:s"));

	$roda = file_get_contents("cabecalho.html");
	echo $roda;
	