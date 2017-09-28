<?php
$dia = date("j");
$mes = date("n");
$año = date("Y");
$totalDiasMes = date("t");
?>
<html>
	<style>
		td{border: 1px solid black; width: 100px;height: 100px;}
	</style>
	<body>
		
	<table>
		<th><?php echo "Mes: ".$mes. "  Año: ".$año  ?></th>
		<tr>
			<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
			<th>Vie</th><th>Sab</th><th>Dom</th>
		</tr>
		
	<?php
		for($i=1;$i <=totalDiasMes;$i++){
			echo "<td> $i </td>";
			if ($i == 7){
				echo "<tr></tr>\n";
				}
			}

			


	?>

	</table>
	</body>
</html>

