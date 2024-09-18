<?php
//Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
//variables y los resultados de sus operaciones. 


$a = random_int(1,200);
$b = random_int(1,200);
$sumas = ["+", "-", "/"];
$resultado = [$a + $b, $a - $b, $a / $b];
$mayor = [0];
echo "<h1>Exercice01.php</h1>";
echo("<p>A: ".$a . "</p>");
echo("<p>B: ".$b . "</p>");

for ($i = 0; $i < count($resultado); $i++) {
    echo ("<p>");
    echo ("$a" . "$sumas[$i]" . "$b" . " = " . $resultado[$i]);
    echo ("</p>");
}
$mayor = [];
for ($i = 0; $i < count($resultado); $i++) {
    (max($resultado) === $resultado[$i] ? ($mayor[count($mayor)] = $i) : " ");
}




for ($i = 0; $i < count($mayor); $i++) {
    echo "<p>El mayor es " . $resultado[$mayor[$i]] . ", con la operacion " . $sumas[$mayor[$i]] . "</p>";
}


if (($a > 1 & $b > 1)) {
    echo("<p>Calcular area del triángulo</p>");
    echo ("<p>");

    echo ("($b * $a)/2 = " . ($b * $a) / 2);
    echo ("</p>");

}
