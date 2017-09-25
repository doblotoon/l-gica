<?php

	$cidade=file("terra.csv");

	//funcao explode separa as partes de um string, dado um separador
																																																																																																																																																																																																																																																																																																																																																		
	print("<table border='1'>");
	foreach ($cidade as $linha) {
		$partes = explode( ";", $linha);
		print("<tr>
					 <td>".$partes[0]."</td>
					<td>".$partes[1]."</td>
					<td>".$partes[2]."</td>
					<td>".$partes[3]."</td>");	
}

?>