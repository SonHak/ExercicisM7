<?php
$m = array( "Alibaba" => "y los quarenta ladrones",
            "Harry Potter" => "y el cáliz de fuego");

//afegim un element més
$m["Aníbal"] = "El caníbal";

//pitem el contingut de l'array
foreach( $m as $clau=>$valor) {
    echo "El valor de [$clau] és [$valor] <br>";
}
