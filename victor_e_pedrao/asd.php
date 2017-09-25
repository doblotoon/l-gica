<?php
	$cabe = file_get_contents("rodape.html");
	echo $cabe;



	$dados = file("terra.csv");

	echo "<table border='outset'>";
	foreach ($dados as $linha) {
		print('<tr>
					 <td>'
					.$linha.
					'</td>
				</tr>');
	}
	echo('</table>')
	print(date("H:m:s"));

	$roda = file_get_contents("cabecalho.html");
	echo $roda;
?>	