<?php
echo "<h1>Exercice03.php</h1>";
$a = rand(10,100);
$b = rand(10,100);

$bucle_For = [];
$bucle_While = [];
$bucle_DoWhile = [];

for ($i=0; $i < $a+1; $i++) { 
    $i % 2 == 0 ? $bucle_For[count($bucle_For)]=$i : " ";
}
$cont = $b;
while($cont != 0){
    $bucle_While[count($bucle_While)] = $cont;
    $cont--;
}

$cont = 0;
do {
    $bucle_DoWhile[count($bucle_DoWhile)] = $a+$cont;
    $cont++;
} while ($a+$cont <= $b);

echo "<p>A: $a</p>";
echo "<p>B: $b</p>";

echo "<p>Bucle por for: </p>";
for ($i=0; $i < count($bucle_For); $i++) { 
    echo("$bucle_For[$i] ");
}
echo "<p>Bucle por While: </p>";
for ($i=0; $i < count($bucle_While); $i++) { 
    echo("$bucle_While[$i] ");
}
echo "<p>Bucle por Do While: </p>";
for ($i=0; $i < count($bucle_DoWhile); $i++) { 
    echo("$bucle_DoWhile[$i] ");
}
