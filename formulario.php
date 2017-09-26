<?php
	include('cabecalho.html');
?>
<form method="post" action="gravcontact.php"> 
	<label for="Nome">Nome</label>
	<input type="text" name="Nome" placeholder="Nome">

	<label for="E-mail">E-mail</label>
	<input type="email" name="E-mail" placeholder="E-mail">

	<label for="Numero">Numero</label>
	<input type="text" name="Numero" placeholder="Numero">

	<label for="Endereco">Endereço</label>
	<input type="text" name="Endereço" placeholder="Endereço">

	<input type="submit" name="Envia" value="Enviar">
</form>

<?php
	include ('rodape.html');
?>