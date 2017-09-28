<?php
$diaActual = date("j");
$mes = date("n");
$año = date("Y");
$totalDiasMes = date("t");
$diaSemana=date("w",mktime(0,0,0,$mes,1,$año));
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
		<tr>
			<?php
			
				for($i=1;$i <=$totalDiasMes;$i++){
					echo "<td> $diaSemana </td>";
					if($i==$diaSemana)
						{
							$day=1;
						}
					else if($i<$diaSemana || $i>=$totalDiasMes){
							echo "<td>&nbsp;</td>";
					}
					else{
						if($day==$diaActual)

							echo "<td class='hoy'>$day</td>";

						else

							echo "<td>$day</td>";

						$day++;

					}
				}
			if ($i%7 ==0){
					echo "<tr></tr>\n";
				}
			?>
		</tr>
	</table>
	</body>
</html>

