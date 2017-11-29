<?php

$nome = "alexsandro deitos";

echo "Converte variavel $nome para letras maíusculas<br>";
echo strtoupper($nome);
echo "<br><br>";

echo "Coverte para letras minúsculas<br>";
echo strtolower($nome);
echo "<br><br>";

echo "Apenas as primeiras letras de cada palavra maíusculas<br>";
echo ucwords($nome);
echo "<br><br>";

echo "Apenas a primeira letra da primeira palavra maíusculas<br>";
echo ucfirst($nome);
echo "<br><br>";

?>