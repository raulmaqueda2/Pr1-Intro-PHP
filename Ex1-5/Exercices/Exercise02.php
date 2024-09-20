<?php
echo "<h1>Exercice02.php</h1>";
$num = rand(1,7);
$dias = array("","lunes","martes","miercoles","jueves","viernes","sabado","domingo",);
if($num>0 && $num<7){
    echo("<p>Numero: $num</p>");
    echo("<p>Nombre: ".$dias[$num]."</p>");
}else{
    echo "Numero fuera del rango";
}