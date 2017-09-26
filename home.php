<?php
//inclui o código PHP, executando-o
include("cabecalho.html");
?>
<a href="formulario.php">CADASTRE-SE AQUI</a>
<?php
print(date("l, F d, Y, H:i:s"));
//Funcao file abre um arquivo e retorna seu conteudo para unm ARRAY
	$dados = file("agenda.csv");
//percorrer o array e exibir cada um dos elementos
	print('<table border="1">');
	foreach ($dados as $linha) {
		//partes é um array que recebe o resultado da separação do texto pelo separador ";"
		$partes = explode(";", $linha);
		print('<tr>
			     <td>'.$partes[0].'</td>
			     <td>'.$partes[1].'</td>
			     <td>'.$partes[2].'</td>
			     <td>'.$partes[3].'</td>
			   </tr>');
	}
	print('</table>');
//Funcao abre um arquivo e retorna seu conteudo em uma STRING
	$rodape = file_get_contents('rodape.html');
	print($rodape);
?>