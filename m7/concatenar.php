<?php
$a1 = array( 'A','B','C','D');
$a2 = array( 1,2,3,4,5,6,7);
$a3 = array( 'Boli', 'Goma', 'Llapis', 'Escurça');
$a = array( 'Lletres' => $a1, 'Números' => $a2, 'Materials Oficina' => $a3 );


$separador = "";
foreach( $a as $clau => $valor ) {
	echo $clau . ": ";
	foreach ($valor as $z ) {
		echo $separador . $z;  //concatenem el separador amb l'element
		$separador = ", ";
    }
    $separador = "";
    echo "</br>";
}
?>
