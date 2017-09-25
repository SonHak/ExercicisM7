<?php
print_r( "Bucle FOREACH");
echo "<br>";
$a = array( 1,1,2,3,5,8,13);
foreach( $a as $v ) {
    echo $v . " ";
}

echo "<br>";
echo "<br>";

print_r( "Bucle FOR" );
echo "<br>";
$a = array( 1,1,2,3,5,8,13);
for( $i = 0; $i < count( $a ); $i++ ) {
    echo $a[$i] . " ";
}

?>

