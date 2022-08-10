<?php 
	include("cabecalho.php");
	include("menu.php");
	include("conexao2.php");
?>
<h1 align='center'> Estacionar </h1>
<div id="container" align="center">
	<a href="estacionar-form.php"><button align="right">Novo</button></a>
	<section>	
		<?php
			$stmt = $pdo->prepare("select * from tbEstacionar order by id desc");	
			$stmt ->execute();

		?>
		<div id="tbEstacionar">
			<table class="table">
				<thead>
					<th> Id </th>
					<th> Placa </th>
					<th> Marca </th>
					<th> Modelo </th>
					<th> Dono </th>
					<th> Data </th>
					<th> Hora Entrada</th>
					<th> Situação</th>
					<th> Controle </th>
				</thead>
				<tbody>
					<?php
						while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
							echo "<tr>";				
								echo "<td>$row[0] </td>";
								echo "<td>$row[1] </td>";
								echo "<td>$row[2] </td>";
								echo "<td>$row[3] </td>";
								echo "<td>$row[4] </td>";
								echo "<td>$row[5] </td>";		
								echo "<td>$row[6] </td>";	
								echo "<td>$row[7] </td>";
								$stmt2 = $pdo->prepare("select count(*) from tbFinalizar where placa='$row[1]' and idEstacionar='$row[0]'");
    							$stmt2->execute();
    							$row2 = $stmt2->fetch(PDO::FETCH_BOTH);

   								if($row2[0] == 1){
        							echo "<td><a href='estacionar-excluir.php?id=$row[0]'>Excluir</a></td>";
    							} 
								else {
									echo "<td>";
									echo "<a href='estacionar-finalizar.php?id=$row[0]'>Finalizar </a>";
								echo "</td>";
								}		
							echo "</tr>";				
						}	
					?>	
				</tbody>		
			</table>
		</div>	
	</section>
</div>