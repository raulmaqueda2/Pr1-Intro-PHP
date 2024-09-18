<?php
echo "<h1>Exercice04.php</h1>";
$numerosLetras = ["uno","dos","tres","cuatro","cinco","seis"];
$ladoContrario = [6,5,4,3,2,1];
$dado = rand(1,6);

echo("<p>Numero sacado: $dado o ".$numerosLetras[$dado-1]."</p>");

echo("<p>Cara Contraria: ".$ladoContrario[$dado-1]." o ". $numerosLetras[$ladoContrario[$dado-1]-1]."</p>");
