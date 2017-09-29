<?php
$diaActual = date("j");
$mes = date("n");
$año = date("Y");
$totalDiasMes = date("t");
$diaSemana=date("w",mktime(0,0,0,$mes,1,$año));
?>
<html>
	<style>
		td{border: 1px solid black; width: 50px;height: 50px;background-color: #66ccff;}
		#actual {background-color: red;}
	</style>
	<body>
		
	<table>
		<th><?php echo "Mes: " + date("M") . "  Año: ".$año  ?></th>
		<tr>
			<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
			<th>Vie</th><th>Sab</th><th>Dom</th>
		</tr>
		<tr>
			<?php
				for($i=1;$i <=42;$i++){
					if($i==$diaSemana)
						{
							$dia=1;
						}
					else if($i<=$diaSemana || $i>$totalDiasMes){
							echo "<td>&nbsp;</td>";
					}
					else{
						if($dia==$diaActual){

							echo "<td id='actual'>$dia</td>";
							
						}else{
							echo "<td>$i</td>";
						}	
				}
				if ($i%7 == 0){
						echo "<tr></tr>\n";
					}
			    }
			?>
		</tr>
	</table>
	</body>
</html>
