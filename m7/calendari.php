<?php
$dia = date("j");
$mes = date("n");
$año = date("Y");
$diaSemana=date("w",mktime(0,0,0,$mes,1,$año))+7;
$ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$año)-1));
?>
<html>
	<style>
		td{border: 1px solid black; width: 100px;height: 100px;}
	</style>
	<body>
	<table>
		<th><?php echo $mes. "  ".$año  ?></th>
		<tr>
			<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
			<th>Vie</th><th>Sab</th><th>Dom</th>
		</tr>
	<?php
		$meses = array(1=> "Enero","Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
					   "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		echo $diaSemana . $ultimoDiaMes;

			


	?>

	</table>
	</body>
</html>

