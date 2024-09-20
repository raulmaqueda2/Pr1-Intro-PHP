<?php

echo "<h1>Exercice01</h1>";
$arrayEx1 = [
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
];
foreach ($arrayEx1 as $key => $value) {
    print "<p>$value</p>";
}

echo "<h1>Exercice02</h1>";
foreach ($arrayEx1 as $key => $value) {
    print "<p>$key: " . $value . "</p>";
}


echo "<h1>Exercice03</h1>";
$arrayEx1["edad"] = 24;
foreach ($arrayEx1 as $key => $value) {
    print "<p>$value</p>";
}

echo "<h1>Exercice04</h1>";
unset($arrayEx1["ciudad"]);
var_dump($arrayEx1);

echo "<h1>Exercice05</h1>";
$letters = "a,b,c,d,e,f";
$arrayEx5 = explode(",", $letters);
for ($i = count($arrayEx5) - 1; $i > -1; $i--) {
    print "<p>letra $i º $arrayEx5[$i]</p>";
}

echo "<h1>Exercice06</h1>";
$alumnos = "Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1";
$arrayEx6A = explode(", ", $alumnos);
$arrayEx6B;
for ($i = 0; $i < count($arrayEx6A); $i++) {
    $temp = explode(": ", $arrayEx6A[$i]);
    $arrayEx6B[$temp[0]] = $temp[1];
}
echo "<p>";
echo "Alumnos : $alumnos";
echo "</p>";

arsort($arrayEx6B);
//print_r($arrayEx6B);
foreach ($arrayEx6B as $key => $value) {
    print "<p>$key: " . $value . "</p>";
}


echo "<h1>Exercice07</h1>";

echo "<p> Media: " . round(array_sum($arrayEx6B) / count($arrayEx6B), 2) . "</p>";
echo "<p>alumnos por encima:</p> ";
foreach ($arrayEx6B as $key => $value) {
    if ((array_sum($arrayEx6B) / count($arrayEx6B)) > $value) {
        break;
    }
    print "<p>$key: " . $value . "</p>";
}

echo "<h1>Exercice08</h1>";
$max = 0;
foreach ($arrayEx6B as $key => $value) {
    if ($max > $value) {
        break;
    }
    $max = $value;
    print "<p>La mejor alumn@ es: $key con " . $value . "/10 </p>";
}
