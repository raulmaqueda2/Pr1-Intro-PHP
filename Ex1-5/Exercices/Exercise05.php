<?php
echo "<h1>Exercice05.php</h1>";
$num = rand(0, 20);
$sum = [$num];
$par = 0;
$impar = 0;
for ($i = 0; array_sum($sum) < 100; $i++) {
    $sum[count($sum)] = rand(0, 20);
    $sum[count($sum) - 1] % 2 ?  $impar++ : $par++ ;
}
echo "<p>";
for ($i=0; $i < count($sum); $i++) { 
    if ((count($sum)-1)==$i) {
        echo ($sum[$i]);
    }else{
        echo ($sum[$i]." + ");
    }
}
echo  " = ". array_sum($sum);
echo "</p>";
echo "<p>Pares: $par </p>";
echo "<p>impares: $impar </p>";
