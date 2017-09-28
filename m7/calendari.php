<?php
$diaActual = date("j");
$mes = date("n");
$año = date("Y");
$totalDiasMes = date("t");
$diaSemana=date("w",mktime(0,0,0,$mes,1,$año))-7;
?>
<html>
	<style>
		td{border: 1px solid black; width: 50px;height: 50px;background-color: #66ccff;}
	</style>
	<body>
		
	<table>
		<th><?php echo "Mes: ". date("M") . "  Año: ".$año  ?></th>
		<tr>
			<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
			<th>Vie</th><th>Sab</th><th>Dom</th>
		</tr>
		<tr>
			<?php
				$ultima_celda=$diaSemana+$totalDiasMes;
				echo "ESTO ES diasemana: " . $diaSemana;
				echo "ESTO ES totalDiasMes: ". $totalDiasMes;
				
				for($i=1;$i <=42;$i++){
					if($i==$diaSemana)
						{
							$dia=1;
						}
					else if($i<=$diaSemana || $i>=$ultima_celda){
							echo "<td>&nbsp;</td>";
					}
					else{
						if($dia==$diaActual){

							echo "<td>$dia</td>";
							
						}else{
							echo "<td>$dia</td>";
						}	
					$dia++;
				}
				if ($i%7 == 0){
						echo "<tr> </tr>\n";
					}
			    }
			?>
		</tr>
	</table>
	</body>
</html>
