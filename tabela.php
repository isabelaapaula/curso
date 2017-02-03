<!DOCTYPE html>
<html>
<head>

	<title>ATIVIDADE1</title>
</head>
<body>
<table width="415" border="1">
	<thead>
		<tr>
			<th><i>Elemento<i></th>
			<th><i>Dia da Semana<i></th>
			<th><i>Prato do Dia<i></th>
			<th><i>Preço<i></th>
		</tr>
	</thead>
	<tbody>
		<?php
				$DiasSemana[0] = 'Domingo';
				$DiasSemana[1] = 'Segunda';
				$DiasSemana[2] = 'Terça';
				$DiasSemana[3] = 'Quarta';
				$DiasSemana[4] = 'Quinta';
				$DiasSemana[5] = 'Sexta';
				$DiasSemana[6] = 'Sábado';
				$Atual = date('w');
				
				$Prato[0] = 'Lasanha';
				$Prato[1] = 'Frango';
				$Prato[2] = 'Arroz';
				$Prato[3] = 'Feijoada';
				$Prato[4] = 'Nhoque';
				$Prato[5] = 'Bacalhau';
				$Prato[6] = 'Feijão';

				$Preço[0] = '12,60';
				$Preço[1] = '10,00';
				$Preço[2] = '09,40';
				$Preço[3] = '11.20';
				$Preço[4] = '08,50';
				$Preço[5] = '15.20';
				$Preço[6] = '10.00';
		
			foreach($DiasSemana as $escolhido => $Dia) {
				echo "<tr>";
				echo "<td> $escolhido </td>";
				echo "<td> $Dia </td>";
				echo "<td> $Prato[$escolhido] </td>";
				echo "<td> $Preço[$escolhido] </td>";
				echo "<tr>";
			}

			?>
	</tbody>
</table>
	<?php

		echo"<h3> Hoje é $DiasSemana[$Atual] </h3>";
		echo "<h3> e o prato de hoje é $Prato[$Atual]</h3> ";
		echo "<h3>com o custo de $Preço[$Atual]</h3>";
	?>
</body>
</html>