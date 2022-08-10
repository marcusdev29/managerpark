<?php 
	include("cabecalho.php");
	include("menu.php");
	include("conexao2.php");

	echo "<h1 align='center'> Cadastrar Veículos </h1>"
?>
<div id="container" align="center">
	<section>
		<form action="estacionar-salvar.php" method="post" id="form">
			<div>
				<input type="text" placeholder="Placa" name="txPlaca"/>
			</div>

			<div>
				<input type="text" placeholder="Marca Veículo" name="txMarca"/>
			</div>

			<div>
				<input type="text" placeholder="Modelo Veículo" name="txModelo"/>
			</div>

			<div>
				<input type="text" placeholder="Dono" name="txDono"/>
			</div>

			<div class="salvar">
				<input type="submit" value="Salvar"/>
			</div>
		</form>
	</section>
</div>