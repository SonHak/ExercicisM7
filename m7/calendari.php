<html>
	<style>
		td{border: 1px solid black; width: 100px;height: 100px;}
	</style>
	<body>
	<table>
		<tr>
			<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
			<th>Vie</th><th>Sab</th><th>Dom</th>
		</tr>
	<?php
		$meses = array(1=> "Enero","Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
					   "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		$mes = date("n");
		$dia = date("j");
		$ano = date ("Y");
		echo "<td>$mes . $dia . $ano </td>";
			


	?>

	</table>
	</body>
</html>

