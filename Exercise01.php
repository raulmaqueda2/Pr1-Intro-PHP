<?php
//Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
//variables y los resultados de sus operaciones. 

$a = 6;
$b = 2;
$sumas = ["+", "-", "/"];
$resultado = [$a + $b, $a - $b, $a / $b];
$resultado = [3, 3, 2];
$mayor = [0];
for ($i = 0; $i < count($resultado); $i++) {
    echo ("<p>");
    echo ("$a" . "$sumas[$i]" . "$b" . " = " . $resultado[$i]);
    echo ("</p>");
}
for ($i = 0; $i < count($resultado); $i++) {
    max($resultado) == $resultado ?  $mayor = array_push($mayor, $i) : "";
}
if (count($mayor) == 0) {
    echo "<p>El mayor es " . $resultado[$mayor[0]] . ", con la operacion " . $sumas[0] . "</p>";
} else {
    for ($i = 0; $i < count($mayor); $i++) {
        echo "<p>El mayor es " . $resultado[$mayor[$i]] . ", con la operacion " . $sumas[$mayor[$i]] . "</p>";
    }
}
